@extends('layouts.app')

@section('content')

<style>
    .purple{
        background-color: #8b008b;
    }
    .modal-footer:hover{
        text-decoration: none;
    }
</style>

        <form action="{{route('cadastrar_atividade')}}" method="POST">
            @csrf
            <div class="modal-content">
            <div class="modal-header purple">
              <h5 class="modal-title text-white">Criação de atividade esportiva</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <div>
                        <label class="form-label">Evento</label>
                        <input type="text" class="form-control" maxlength="45" name="name_event">
                    </div>
                    <div>
                        <label class="form-label">Descrição</label>
                        <textarea class="form-control" maxlength="75" name="description"></textarea>
                    </div>
                    <div class="">
                        <label class="form-label">De:</label>
                        <input type="date" class="form-control w-50" name="date_activity">
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label class="form-label">Inicio:</label>
                            <select class="form-select">
                                <option selected>Selecione</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label class="form-label">Término:</label>
                            <select class="form-select">
                                <option selected>Selecione</option>
                            </select>
                        </div>
                        <div class="form-check col-4 mt-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Não se repete</label>
                            <label class="form-check-label" for="flexRadioDefault2">Repetir</label>
                            <input type="radio" name="flexRadioDefault" id="flexRadioDefault2" class="form-check-input">
                        </div>
                        <div class="form-check">
                            <label class="form-label">Intervalo de semanas : 1</label>
                            <input type="range" class="form-range w-25" min="0" max="5">
                        </div>
                    </div>

                </div>
              <button type="submit" class="purple">Salvar</button>
          </div>
        </form>

@endsection