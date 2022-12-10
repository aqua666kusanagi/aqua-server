<div class="fixed z-10 inset-0 overflow-y-auto " aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 ">

        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " wire:click="closemodalview_nuetrient_analysis()" aria-hidden="true"></div>

        <div class="relative inline-block bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all w-2/3 content-start">
            <div>
                <div class="mx-auto flex items-center justify-center h-12 w-full rounded-full bg-green-100">
                    <h3 class="items-center">Reporte del dia {{$nutrient_analy->date_sample}}</h3>
                </div>
                <div class="mt-3 text-center sm:mt-5 border rounded">
                    <div class="mt-2 border border-indigo-400">
                        {{--<embed src="C:\projects\cultivoshass2.0\storage\app\public\file_nutrient_analysis\THQaHLTP3U783FKkr22DUaGBiIF0iApFJ7dsVPph.docx" type="application/docx"/>--}}
                        {{--<object class="pdfview" data="application/pdf" type="{{url("storage/".$nutrient_analy->path)}}"></object>--}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
