@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Graphe de moyennes</h6>
                                <h2 id="top" class="text-white mb-0">Notes des étudiants de toute les filières </h2>
                            </div>
                            
                        </div>
                    </div>
                    <div id='svg1' class="card-body">

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="text-white mb-0">Testez vos notes</h3>
                            </div>
                           
                        </div>
                    </div>
                    <div class="table-responsive text-center">
                        <!-- Projects table -->
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Matiere</th>
                                    <th scope="col">Note Minimale</th>
                                    <th scope="col">Note Maximale</th>
                                    <th scope="col">Note Etudiant</th>
                                </tr>
                            </thead>
                            <form id="studentNotesForm" method="post">
                                <tbody>
                                    @foreach(json_decode($maxFiliere['GM'])[0] as $key => $value)
                                    <tr>
                                        <th scope="row">
                                            {{$key}}
                                        </th>
                                        <td>
                                            {{((array)json_decode($minFiliere['GM'])[0])[$key]}}
                                        </td>
                                        <td>
                                            {{$value}}
                                        </td>
                                        <td>
                                            <input type="number" step="any" name="{{$key}}" required>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </form>
                        </table>
                            <button class="btn btn-primary" type="submit" form="studentNotesForm"><a href="#top">*</a>Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 text-center">
                <div id="note1" class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">LA NOTE GENERALE </h3>
                            </div>
                          
                        </div>
                    </div>
                    <div class="table-responsive ">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Moyenne Generale <br>des etudiants</th>
                                    <th scope="col">Votre<br> Note Moyenne</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="noteFiliere">
                                        
                                    </td>
                                    <td id="noteEtudiant">
                                        Pas Encore Calcule
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <p>Votre note est inférieure à la moyenne des notes dans cette filière.</p> --}}

            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
<script src={{asset('assets/js/jquery.js')}}></script>
<script src={{asset('assets/js/d3.min.js')}}></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        var data = @json($avgData);
        var dataFiliere = @json($avgFiliere);
        var minFiliere = @json($minFiliere);
        var maxFiliere = @json($maxFiliere);
        var fil = undefined;
    </script>
    <script src={{asset('assets/js/script.js')}}></script>
    <!-- <script src={{asset('assets/js/filieres.js')}}></script> -->
    <script src={{asset('assets/js/studentNotesForm.js')}}></script>
@endpush