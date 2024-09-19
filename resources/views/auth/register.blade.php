
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
              <x-label for="name" value="{{ __('Rut') }}" />
              <x-input id="rut" class="block mt-1 w-full" type="text" name="rut" :value="old('rut')" required autofocus autocomplete="rut" />
            </div>
            <div class="mt-4">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-label for="name" value="{{ __('Last Name') }}" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            </div>
            <div class="mt-4">
                <x-label for="name" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />    
            </div>
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div>
               <select name="id_region" id="id_region" class="form-control" required>
                  <option value="">Seleccione una región</option>
                     @foreach ($regiones as $region)
                       <option value="{{ $region->id }}">{{ $region->nombre }}</option>
                     @endforeach
                </select>   
            </div>
            <div class="mt-4">
                <x-label for="comuna" value="{{ __('Comuna') }}" />
                <select id="id_comuna" name="id_comuna">
                    <option value="">Seleccione una comuna</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="address" value="{{ __('address') }}" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
            </div>

           

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {

        function validarRut(rut) {
    // Eliminar puntos y guión
    rut = rut.replace(/[.\-]/g, '');

    // Verificar que el RUT tenga entre 8 y 9 dígitos
    if (!/^\d{7,8}[0-9kK]$/.test(rut)) {
        return false;
    }

    // Separar el RUT y el dígito verificador
    const dv = rut.slice(-1).toUpperCase();
    const rutNumber = rut.slice(0, -1);

    // Calcular el dígito verificador
    let sum = 0;
    let factor = 2;

    for (let i = rutNumber.length - 1; i >= 0; i--) {
        sum += rutNumber[i] * factor;
        factor = factor === 7 ? 2 : factor + 1;
    }

    const dvCalculated = 11 - (sum % 11);
    const dvCalculatedFormatted = dvCalculated === 11 ? '0' : dvCalculated === 10 ? 'K' : dvCalculated.toString();

    // Verificar el dígito verificador
    return dv === dvCalculatedFormatted;
}

document.getElementById('rut').addEventListener('blur', function() {
    const rutInput = document.getElementById('rut');
    const rutError = document.getElementById('rutError');
    const rutValue = rutInput.value;

    if (!validarRut(rutValue)) {
        alert('El RUT ingresado es inválido.');
       
        rutInput.value = '';
        
        
     

    } 
});











        $('#id_region').on('change', function() {
            var regionId = $(this).val();
            if (regionId) {
                $.ajax({
                    url: '/buscatiendas/public/comunas/' + regionId,
                    type: 'GET',
                    
                    success: function(data) {
                        $('#id_comuna').empty();
                        $('#id_comuna').append('<option value="">Seleccione una comuna</option>');
                        $.each(data, function(key, value) {
                            $('#id_comuna').append('<option value="' + value.id + '">' + value.nombre + '</option>');
                        });
                    }
                });
            } else {
                $('#id_comuna').empty();
                $('#id_comuna').append('<option value="">Seleccione una comuna</option>');
            }
        });
    });
</script>