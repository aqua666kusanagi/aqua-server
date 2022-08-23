<?php

namespace App\Http\Livewire;

use App\Models\Orchard;
use App\Models\Phenophase;
use App\Models\RegistrationPhenophase;
use App\Models\Workday;
use App\Models\TypeJob;
use App\Models\Activity;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CalendarController extends Component
{
    public $data_select, $mess,$dia;
    public $data, $mesingles, $mespanish, $lastmosth, $nextmonth;
    public $user_id, $id_orchard, $datos_orchard;

    public $windowevent=0, $isconfirm =0, $getid =0;

    public $workdays, $workday_id, $date_work, $general_expenses;
    public $modalworkday = 0;

    public $activities, $activities_id, $type_job_id, $cost;

    public function render()
    {
        $datos_orchard=$this->datos_orchard;

        $this->mess=date("m");
        $this->dia=date("d");
        $data=$this->data;
        //dd($data);
        $mesingles=$this->mesingles;
        $mespanish=$this->mespanish;
        $this->lastmosth=$data['last'];
        $this->nextmonth=$data['next'];

        $this->workdays = $this->workday();
        $this->activities = $this->activitiesxmes();

        return view('livewire.calendar_orchards.calendar-controller',[
            'datos_orchard' => $datos_orchard,
            'data' => $data,
            'mesingles' => $mesingles,
            'mespanish' => $mespanish,
            'type_jobs' =>TypeJob::all(),
        ]);
    }

    public function mount($id){
        $this->id_orchard=$id;
        $this->datos_orchard=Orchard::findOrFail($this->id_orchard);
        $this->user_id=Auth::id();
        $this->calendario();
    }

    public function calendario(){
        $month = date("Y-m");
        //dd($month); //Obtenemos el mes y año en el que estamos de tipo entero
        $this->data = $this->calendar_month($month);
        //dd($this->data); //Obtenemos el mes-año aterior, el mes-año actual, el mes-año siguiente y el calendario de el mes actual por semana y dia y el dia tiene mes-dia-fecha
        $this->mesingles = $this->data['month'];
        //dd($this->mesingles); //Obtenemos el nombre del mes actual en ingles
        // obtener mes en espanol
        $this->mespanish = $this->spanish_month($this->mesingles);
        //dd($this->mespanish); //Obtenemos el nombre del mes actual en español
        $this->mesingles = $this->data['month'];
        //dd($this->mesingles); //Obtenemos el nombre del mes actual en ingles

        $this->render();
    }

    public function last_year(){
        $this->data = $this->calendar_month($this->lastmosth);
        $this->mesingles = $this->data['month'];
        // obtener mes en espanol
        $this->mespanish = $this->spanish_month($this->mesingles);
        $this->mesingles = $this->data['month'];

        $this->render();
    }

    public function next_year(){
        $this->data = $this->calendar_month($this->nextmonth);
        $this->mesingles = $this->data['month'];
        // obtener mes en espanol
        $this->mespanish = $this->spanish_month($this->mesingles);
        $this->mesingles = $this->data['month'];

        $this->render();
    }

    //*********************************************************************

    public static function calendar_month($month){
        //$mes = date("Y-m");
        $mes = $month;
        //sacar el ultimo de dia del mes
        $daylast =  date("Y-m-d", strtotime("last day of ".$mes));
        //sacar el dia de dia del mes
        $fecha      =  date("Y-m-d", strtotime("first day of ".$mes));
        $daysmonth  =  date("d", strtotime($fecha));
        $montmonth  =  date("m", strtotime($fecha));
        $yearmonth  =  date("Y", strtotime($fecha));
        // sacar el lunes de la primera semana
        $nuevaFecha = mktime(0,0,0,$montmonth,$daysmonth,$yearmonth);
        $diaDeLaSemana = date("w", $nuevaFecha);
        $nuevaFecha = $nuevaFecha - ($diaDeLaSemana*24*3600); //Restar los segundos totales de los dias transcurridos de la semana
        $dateini = date ("Y-m-d",$nuevaFecha);
        //$dateini = date("Y-m-d",strtotime($dateini."+ 1 day"));
        // numero de primer semana del mes
        $semana1 = date("W",strtotime($fecha));
        // numero de ultima semana del mes
        $semana2 = date("W",strtotime($daylast));
        // semana todal del mes
        // en caso si es diciembre
        if (date("m", strtotime($mes))==12) {
            $semana = 5;
        }
        else {
            $semana = ($semana2-$semana1)+1;
        }
        // semana todal del mes
        $datafecha = $dateini;
        $calendario = array();
        $iweek = 0;
        while ($iweek < $semana):
            $iweek++;
            //echo "Semana $iweek <br>";
            //
            $weekdata = [];
            for ($iday=0; $iday < 7 ; $iday++){
                // code...
                $datafecha = date("Y-m-d",strtotime($datafecha."+ 1 day"));
                $datanew['mes'] = date("M", strtotime($datafecha));
                $datanew['dia'] = date("d", strtotime($datafecha));
                $datanew['fecha'] = $datafecha;
                //AGREGAR CONSULTAS EVENTO
                //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                array_push($weekdata,$datanew);
            }
            $dataweek['semana'] = $iweek;
            $dataweek['datos'] = $weekdata;
            //$datafecha['horario'] = $datahorario;
            array_push($calendario,$dataweek);
        endwhile;
        $nextmonth = date("Y-M",strtotime($mes."+ 1 month"));
        $lastmonth = date("Y-M",strtotime($mes."- 1 month"));
        $month = date("M",strtotime($mes));
        $yearmonth = date("Y",strtotime($mes));
        //$month = date("M",strtotime("2019-03"));
        $data = array(
            'next' => $nextmonth,//obtenemos el mes-año siguiente
            'month'=> $month, //obtenemos el mes actual
            'year' => $yearmonth, //obtenemos el año actual
            'last' => $lastmonth, //obtenemos el mes-año anterior
            'calendar' => $calendario, //Obtenemos los dias con
        );
        return $data;
    }
    public static function spanish_month($month)
    {

        $mes = $month;
        if ($month=="Jan") {
            $mes = "Enero";
        }
        elseif ($month=="Feb")  {
            $mes = "Febrero";
        }
        elseif ($month=="Mar")  {
            $mes = "Marzo";
        }
        elseif ($month=="Apr") {
            $mes = "Abril";
        }
        elseif ($month=="May") {
            $mes = "Mayo";
        }
        elseif ($month=="Jun") {
            $mes = "Junio";
        }
        elseif ($month=="Jul") {
            $mes = "Julio";
        }
        elseif ($month=="Aug") {
            $mes = "Agosto";
        }
        elseif ($month=="Sep") {
            $mes = "Septiembre";
        }
        elseif ($month=="Oct") {
            $mes = "Octubre";
        }
        elseif ($month=="Oct") {
            $mes = "December";
        }
        elseif ($month=="Dec") {
            $mes = "Diciembre";
        }
        else {
            $mes = $month;
        }
        return $mes;
    }

    // FUNCIONES PARA LOS EVENETOS
    public function openevent(){
        $this->windowevent=true;
    }
    public function closeevent(){
        $this->windowevent=false;
    }
    public function openModaldelete()
    {
        $this->isconfirm = true;
    }
    public function closeModaldelete()
    {
        $this->isconfirm = false;
    }
    public function ConfirmaDelete($id){
        $this->openModaldelete();
        $this->getid = $id;
    }

    // FUNCIONES PARA LOS DIAS DE TRABAJO y ACTIVIDADES
    public function workday(){
        $datos=Workday::join("orchards","orchards.id","workdays.orchard_id")
            ->join("users","users.id","workdays.user_id")
            ->where("workdays.orchard_id",$this->id_orchard)
            ->where("users.id",$this->user_id)
            ->select("workdays.*")
            ->get();
        //$datos=DB::table("workdays")->where("orchard_id",$this->idd)->get();
        return $datos;
    }
    public  function activitiesxday(){
        $actividad=Activity::join("workdays","workdays.id","activities.workday_id")
                            ->join("type_jobs","type_jobs.id","activities.type_job_id")
                            ->where("activities.workday_id",)
                            ->get();
    }
    public function activitiesxmes(){
        $datos=Activity::join('workdays','workdays.id','activities.workday_id')
            ->join('type_jobs','type_jobs.id','activities.type_job_id')
            ->where("workdays.orchard_id",$this->id_orchard)
            ->select('activities.*')
            ->get();
        return $datos;
    }
    public function storeworkday(){
        $this->validate([
           'user_id' => 'required',
            //'orchard_id' => 'required',
            'date_work' => 'required',
            'general_expenses' => 'required'
        ]);

        Workday::updateOrCreate(['id' => $this->workday_id],[
           'user_id' => $this->user_id,
           'orchard_id' => $this->id_orchard,
           'date_work' => $this->date_work,
           'general_expenses' => $this->general_expenses,
        ]);
        //dd(Workday::latest('id')->first());
        $this->workday_id=Workday::latest('id')->first();
        //dd($this->workday_id->id);
        $this->storeactiviti();
    }
    public function storeactiviti(){
        $this->validate([
            //'workday_id' => 'required',
            'type_job_id' => 'required',
            'cost' => 'required',
        ]);
        Activity::updateOrCreate(['id' => $this->activities_id],[
            'workday_id' => $this->workday_id->id,
            'type_job_id' => $this->type_job_id,
            'cost' => $this->cost,
        ]);
        $this->workday_id = '';
        $this->date_work = '';
        $this->general_expenses = '';
        $this->type_job_id = '';
        $this->cost = '';
        $this->closemodalworkday();
    }
    public function edit_activiti(){
        $this->openmodalworkday();
    }
    public function openmodalworkday()
    {
        $this->modalworkday = true;
    }
    public function closemodalworkday()
    {
        $this->modalworkday = false;
    }

}
