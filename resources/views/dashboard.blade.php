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
                                <h2 class="text-white mb-0">IAGI </h2>
                            </div>
                            
                        </div>
                    </div>
                    <div id='svg1' class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Moyennes de notes</h6>
                                <h2 class="text-white mb-0">Filiere</h2>
                            </div>
                            <div class="col">
                                <select class="btn btn-danger" name="filiere" id="filiereSelect">
                                    <option value="GM">GM</option>
                                    <option value="GI">GI</option>
                                    <option value="GEM">GEM</option>
                                    <option value="IAGI">IAGI</option>
                                    <option value="MSEI">MSEI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id='svg2' class="card-body">
                        
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
                            <form id="studentNotesForm">
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
                            <input class="btn btn-primary" type="submit" value="Submit" form="studentNotesForm">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 text-center">
                <div class="card shadow">
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
                                    <th scope="col">Moyenne <br>de la <br>filiere</th>
                                    <th scope="col">Votre<br> Note</th>
                                    <th scope="col-6"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >
                                        15.45
                                    </td>
                                    <td>
                                        13,33
                                    </td>
                                    <td>
                                       
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <p>Votre note est inférieure à la moyenne des notes dans cette filière.

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
    </script>
    <script src={{asset('assets/js/script.js')}}></script>
    <script src={{asset('assets/js/filieres.js')}}></script>
    <script src={{asset('assets/js/studentNotesForm.js')}}></script>
@endpush