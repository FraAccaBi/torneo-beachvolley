@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <header class="hero">
                        <div class="hero-wrap">
                            <h1 id="headline">Torneo di colle</h1>
                            <p class="year"><i class="fa fa-star"></i> Ferragosto <i class="fa fa-star"></i></p>
                        </div>
                    </header>

                    <div id="bracket">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 ottavi">
                                    <h3 class="title">
                                        Ottavi
                                    </h3>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                </div>
                                <div class="col-md-3 quarti">
                                    <h3 class="title">
                                        Quarti
                                    </h3>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                </div>
                                <div class="col-md-3 semi">
                                    <h3 class="title">
                                        Semifinale
                                    </h3>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                </div>
                                <div class="col-md-3 final">
                                    <h3 class="title">
                                        Finale
                                    </h3>
                                    <div class="cell">
                                        <p class="player"> Team </p>
                                        <p class="player"> Team </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
