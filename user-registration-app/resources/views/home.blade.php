@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xl-3 col-lg-2">
            <div class="card shadow mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary text-center">KONTROLNA TABLA</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle"   role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-6 text-left small">
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/students') }}">
                            <div class="sidebar-brand-text mx-3" style="font-size: 16px">Studenti</div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8">
            <div class="card shadow mb-4">
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">ZASTITA RACUNARSKIH MREZA</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                             aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                        <h4>Obavestenje</h4>
                        <p>Na ovom predmetu studenti sti??u neophodna znanja iz osnova kriptologije
                            uz primenu matemati??kog aparata koji je potreban za analizu i sintezu savremenih
                            ??ifarskih sistema. Savladavaju se osnovni servisi za??tite informacija: tajnost,
                            integritet, autentifikacija i neporecivost. Defini??u se apsolutno i prakti??no
                            tajni ??ifarski sistemi. Detaljno se razmatraju svojstva simetri??nih
                            (sekvencijalni i blokovski) i asimetri??nih ??ifarskih sistema.
                            Prikazuju se savremeni algoritmi za ??ifrovanje i pravilna upotreba
                            ??ifarskih klju??eva (tajni, javni, privatni, sesijski, fabri??ki itd.).
                            Prakti??an deo ve??bi se realizuje u softverskom Cryptool softverskom okru??enju.
                            Studenti ??e biti osposobljeni da samostalno procenjuju kvalitet zadatog
                            ??ifarskog sistema i razumeju njegovo mesto i ulogu u savremenom integrisanom ra??unarskom
                            okru??enju.</p>

                        <p>
                            Srda??an pozdrav,

                            prof. dr Sa??a Adamovi??
                        </p>
                </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Milos Milojkovic 2020</span>
            </div>
        </div>
    </footer>
@endsection
