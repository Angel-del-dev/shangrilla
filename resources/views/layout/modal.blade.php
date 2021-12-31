<script src="{{asset('js/generate/modal.js')}}" type="module" defer></script>
{{-- Start language selector --}}
<div class="modal fade show" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-modal="true" role="dialog" style="display:block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Language</h5>
            </div>
            <div class="modal-body">
                <select class="form-select" id="lang-select" aria-label="Default select example"></select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn agree" id="lang-agree" data-bs-dismiss="modal">Send</button>
            </div>
        </div>
    </div>
</div>
<div id="ever"></div>
{{-- End language selector --}}

{{-- Start New Story --}}
<div class="modal" id="newStory">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="obra-type"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body" id="storySelector">
            <div class="card" data-id="1">
              <img src="{{asset('img/placeholder/placeholder.jpg')}}" alt="Placeholder img" />
              <div class="type">
              <span class="book-type"></span>
              </div>
            </div>
            <div class="card" data-id="2">
                <img src="{{asset('img/placeholder/placeholder.jpg')}}" alt="Placeholder img" />
                <div class="type">
                    <span class="book-type"></span>
                </div>
            </div>
            <div class="card" data-id="3">
                <img src="{{asset('img/placeholder/placeholder.jpg')}}" alt="Placeholder img" />
                <div class="type">
                    <span class="book-type"></span>
                </div>
            </div>
            <div class="card" data-id="4">
                <img src="{{asset('img/placeholder/placeholder.jpg')}}" alt="Placeholder img" />
                <div class="type">
                    <span class="book-type"></span>
                </div>
            </div>
            <div class="card" data-id="5">
                <img src="{{asset('img/placeholder/placeholder.jpg')}}" alt="Placeholder img" />
                <div class="type">
                    <span class="book-type"></span>
                </div>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer" id="modal-footer" hidden>
          <button type="button" class="btn btn-danger" id="close" data-bs-dismiss="modal"></button>
          <button type="button" class="btn btn-success" id="send"></button>
        </div>

      </div>
    </div>
  </div>
  {{-- End New Story --}}
