<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span class="fa fa-times" aria-hidden="true"></span></button>
        <h4 class="modal-title text-center" id="myModalLabel">INICIAR SESIÓN</h4>
    </div>
    <div class="modal-body">
       <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label"><i class="icono-ema fa fa-at"></i>  Correo electronico</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label"><i class="icono-pass fa fa-unlock-alt"></i>  Contraseña</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary" id="btnOpenModal">
                    Iniciar sesión
                </button>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Olvidaste tu contraseña?
                </a>
            </div>
        </div>
    </form>

</div>
<div class="modal-footer ">
    <h4 class="text-center"><i class="fa fa-copyright"></i>Todos los derechos reservados</h4>
</div>
</div>
</div>
</div>
