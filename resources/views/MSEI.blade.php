@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row my-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Moyennes de notes</h6>
                                <h2 class="text-white mb-0">MSEI</h2>
                            </div>
                        </div>
                    </div>
                    <div id='svg2' class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
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
                                    <th scope="col">Moyenne Generale <br>du filiere</th>
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
        var dataFiliere = @json($avgFiliere);
        const fil = 'MSEI';
    </script>
    <script src={{asset('assets/js/script.js')}}></script>
    <script src={{asset('assets/js/filieres.js')}}></script>
    <script src={{asset('assets/js/studentNotesForm.js')}}></script>
@endpush