<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="widt=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reserva</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/moment.min.js"></script>
<!-- calendario -->
  <link rel="stylesheet" href="../estilos/fullcalendar.min.css">
  <script src="../js/fullcalendar.min.js"></script>
  <script src="../js/es.js"></script>
  <script src="../js/bootstrap-clockpicker.js"></script>
  <link rel="stylesheet" href="../estilos/bootstrap-clockpicker.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 <style>

   .fc th{
      padding: 10px 0px;
      vertical-align: middle;
      background: #f2f2f2;

   }


 </style>


</head>
<body>

  <div class="container">

    <div class="row">
    <div class="col"></div>
    <div class="col-7"></br></br><div id="reservaweb"></div></div>
    <div class="col"></div>

    </div>
  </div>
  <script>
    $(document).ready(function(){

      $('#reservaweb').fullCalendar({
        header:{
          left:'today,prev,next',
          center:'title',
          right:'month, basicWeek, basicDay, agendaWeek, agendaDay'
        },
      
        dayClick:function(date,jsEvent,view){

        $('#btnAgregar').prop('disabled',false);
        $('#btnModificar').prop('disabled',true);
        $('#btnEliminar').prop('disabled',true);

          limpiarFormulario();
          $('#txtFecha').val(date.format());
          $("#ModalReserva").modal();

        },
        events: 'config/conexion.php',

        eventClick:function(calEvent,jsEvent,view)
        {

        $('#btnAgregar').prop('disabled',true);
        $('#btnModificar').prop('disabled',false);
        $('#btnEliminar').prop('disabled',false);

          $('#txtNombre').val(calEvent.title);
          $('#txtNombreBarbero').val(calEvent.resourceId);
          $('#txtServicio').val(calEvent.descripcion);
          $('#txtRut').val(calEvent.id);
          FechaHora= calEvent.start._i.split(" ");
          $('#txtFecha').val(FechaHora[0]);
          $('#txtHora').val(FechaHora[1]);

          $("#ModalReserva").modal();

        },

        editable: true,
        eventDrop: function(calEvent){

          $('#txtNombre').val(calEvent.title);
          $('#txtNombreBarbero').val(calEvent.resourceId);
          $('#txtServicio').val(calEvent.descripcion);

          var fechaHora=calEvent.start.format().split("T");
          $('#txtFecha').val(FechaHora[0]);
          $('#txtHora').val(FechaHora[1]);

          RecolectarDatos();
          

        }

      });
    });
  </script>

<!-- MODAL AGREGAR MODIFICAR Y ELIMINAR -->

<div class="modal fade" id="ModalReserva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloReserva"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <input type="hidden" id="txtId" name="txtId" value="10:30">
        <input type="hidden" id="txtFecha" name="txtFecha">

          <div class="form-row">
            <div class="form-group col-md-8">

             <label>Nombre Cliente:</label> 
             
             <input type="text" class="form-control" id="txtNombre" placeholder="Nombre Cliente"/><br/>
             <label>Nombre Barbero:</label> 
             
             <input type="text" class= "form-control" id="txtNombreBarbero" placeholder="Nombre Barbero"><br/>

        </div>


        <div class="form-group col-md-4">

           <label>Hora de reserva</label>

           <div class="input-group clockpicker" data-autoclose="true">

             <input type="text" id="txtHora" value="10:30" class="form-control">

            </div>
           

          </div>

        </div>
        <div class="form-group">
          
          <label>Servicio: </label>
          
          <textarea id="txtServicio" rows="3" class="form-control" ></textarea><br/>

        </div>

          

      </div>
      <div class="modal-footer">
        <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
        <button type="button" id="btnModificar" class="btn btn-success">Modificar</button>
        <button type="button" id="btnEliminar" class="btn btn-danger">Eliminar</button>
        <button type="button" id="btn" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script>
  var nuevaReserva;
  $('#btnAgregar').click(function(){
    RecolectarDatos();
    $('#reservaweb').fullCalendar('renderEvent', nuevaReserva);
    $("#ModalReservas").modal('toggle');

  });

  function RecolectarDatos()
  {
    nuevaReserva = {
      
      id:$('#txtId').val(),
      title:$('#txtNombre').val(),
      start:$('#txtFecha').val()+" " +$('#txtHora').val(),
      descripcion:$('#txtServicio').val(),
      resourceId:$('#txtNombreBarbero').val(),
      end:$('#txtFecha').val()+" " +$('#txtHora').val()

    };
  }

  $('.clockpicker').clockpicker();

  function limpiarFormulario()
  {
    $('#txtId').val('');
    $('#txtNombre').val('');
    $('#txtServicio').val('');
    $('#txtNombreBarbero').val('');
  }
</script>
</body>
</html>