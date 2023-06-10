<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends('layouts.calendar')
    @extends('layouts.bootstrap')
    <title>Document</title>
</head>
<body>
    <div class="container-sm"></div>
        <div class="container "></div>
        <div id="calendar" class="container-sm">

        </div>
        <!--Modal-->
        <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="appointmentForm">
                    {{ csrf_field() }}
                    <div class="mb-3">
                      <label for="title" class="col-form-label">Titulo</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="message-text" class="col-form-label">Inicio</label>
                      <input type="datetime-local" class="form-control" id="start" name="start"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Termino</label>
                        <input type="datetime-local" class="form-control" id="end" name="end"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Cantidad de miebros</label>
                        <input type="number" class="form-control" id="maxMembers" name="maxMembers"></textarea>
                      </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary" id="addApointment">Añadir cita</button>
                </div>
              </div>
            </div>
          </div>


    @vite(['resources/js/calendar.js'])
    @vite(['resources/js/fetchingdata.js'])
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appointmentModal" data-bs-whatever="@mdo">Open modal for @mdo</button>

</body>
</html>