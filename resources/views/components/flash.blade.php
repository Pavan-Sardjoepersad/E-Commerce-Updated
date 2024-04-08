{{-- @if (session()->has('success'))
            <div 
                x-data="{show:true}"
                x-init="setTimeout(() => show = false, 4000)"
                x-show = "show"
                class="fixed bg-blue-500 text-white mr-4 py-2 px-4 rounded-xl top-3 right-3 text-sm">
                <p>{{session('success')}}</p>
            </div>
@endif --}}

@if (session()->has('success'))
    
        <div 
            x-data="{show:true}"
            x-init="setTimeout(() => show = false, 4000)"
            x-show = "show" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class=" bg-blue-100 border border-blue-400 text-blue-700 px-2 py-1 rounded  text-center" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{session('success')}}</span>
        </div>
  
@endif