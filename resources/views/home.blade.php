@extends('layout/app')

@section('content')
    <script src="{{ asset('js/drag.js') }}" defer></script>
    <script src="{{ asset('js/citeLimit.js') }}" defer></script>
    <script src="{{ asset('js/generate/home.js') }}" type="module" defer></script>
    {{-- Novelas --}}
    <div id="novels">
        <div class="title">
            <a href="/novels">
                <h2>
                    <span class="titles" title=""></span>
                </h2>
            </a>
        </div>
        <div class="books books-novel">
            @foreach ($novels as $n)
                <a href="/s/{{ $n->id }}" title="Click to read">
                    <div class="card">
                        <img src='{{ asset("img/cover/{$n->img}") }}' />
                        <div>
                            <span class="title">{{ $n->name }}</span>
                            <br />
                            <br />
                            <cite class="aname">{{ $n->uname }}</cite>
                            <br />
                            <hr />
                            <br />
                            <cite class="desc">{{ $n->description }}</cite>
                        </div>
                    </div>
                </a>

            @endforeach
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
        </div>
    </div>
    <br />
    <div id="stories">
        <div class="title">
            <a href="/stories">
                <h2>
                    <span class="titles" title=""></span>
                </h2>
            </a>
        </div>
        <div class="books books-story">
            @foreach ($stories as $s)
                <a href="/s/{{ $s->id }}" title="Click to read">
                    <div class="card">
                        <img src='{{ asset("img/cover/{$s->img}") }}' />
                        <div>
                            <span class="title">{{ $s->name }}</span>
                            <br />
                            <br />
                            <cite class="aname">{{ $s->uname }}</cite>
                            <br />
                            <hr />
                            <br />
                            <cite class="desc">{{ $s->description }}</cite>
                        </div>
                    </div>
                </a>
            @endforeach
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
        </div>
    </div>
    <div id="short-stories">
        <div class="title">
            <a href="/shortstories">
                <h2>
                    <span class="titles" title=""></span>
                </h2>
            </a>
        </div>
        <div class="books books-short-story">
            @foreach ($shortstories as $ss)
                <a href="/s/{{ $ss->id }}" title="Click to read">
                    <div class="card">
                        <img src='{{ asset("img/cover/{$ss->img}") }}' />
                        <div>
                            <span class="title">{{ $ss->name }}</span>
                            <br />
                            <br />
                            <cite class="aname">{{ $ss->uname }}</cite>
                            <br />
                            <hr />
                            <br />
                            <cite class="desc">{{ $ss->description }}</cite>
                        </div>
                    </div>
                </a>
            @endforeach
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
        </div>
    </div>
    <div id="micro-stories">
        <div class="title">
            <a href="/microstories">
                <h2>
                    <span class="titles" title=""></span>
                </h2>
            </a>
        </div>
        <div class="books-micro-story relatos">
            @foreach ($microstories as $ms)
                <a href="/s/{{ $ms->id }}" title="Click to read">
                    <div class="card">
                        <div>
                            <span class="title">{{ $ms->name }}</span>
                            <br />
                            <br />
                            <cite class="aname">{{ $ms->uname }}</cite>
                            <br />
                            <hr />
                            <br />
                            <cite class="relatos-desc">{{ $ms->description }}</cite>
                        </div>
                    </div>
                </a>
            @endforeach
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
        </div>
    </div>
    <div id="nano-stories">
        <div class="title">
            <a href="/nanostories">
                <h2>
                    <span class="titles" title=""></span>
                </h2>
            </a>
        </div>
        <div class="books-nano-story relatos">
            @foreach ($nanostories as $ns)
                <a href="/s/{{ $ns->id }}" title="Click to read">
                    <div class="card">
                        <div>
                            <span class="title">{{ $ns->name }}</span>
                            <br />
                            <br />
                            <cite class="aname">{{ $ms->uname }}</cite>
                            <br />
                            <hr />
                            <br />
                            <cite class="relatos-desc">{{ $ns->description }}</cite>
                        </div>
                    </div>
                </a>
            @endforeach
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
            <a class="card"></a>
        </div>
    </div>
@endsection
