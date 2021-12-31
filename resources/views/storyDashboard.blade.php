@extends('layout/app')

@section('content')
    <script src="{{asset('js/generate/storyDashboard.js')}}" type="module" defer></script>
    <script type="module">
        import {langs} from "{{asset('js/data/lang-data.js')}}";

        const lang = document.getElementById("lang");
        for (let l of langs) {
            const option = document.createElement("option");
            if (l["abbr"] == "{{ $s->language }}") {
                option.setAttribute("selected",true);
            }
            option.value = l["abbr"];
            option.innerHTML = l["full"];
            lang.append(option);
        }
        </script>
    <input type="hidden" id="story-id" value="{{$s->id}}" />
    <!-- Modal -->
    <div class="modal-custom">
        <div class="header modal-header">
            <input type="text" id="story-name" class="mt-3" value="{{ $s->name }}">
            <select id="lang" class="story-lang"></select>
        </div>
        <div class="modal-body">
            <textarea id="story-description" cols="30" rows="10" maxlength="400" class="form-control">{{ $s->description }}</textarea>
        </div>
        <div class="modal-footer">
            <button class="btn bg-success text-white disabled" id="confirm"><i class="fas fa-check"></i></button>
        </div>
    </div>
@endsection
