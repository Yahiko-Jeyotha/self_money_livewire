<div>
    <div class="py-12">
        <div class="grid grid-cols-3 gap-3 container">

            @livewire('crear-ingreso', ['tipoIngresos' => $data['tipoIngresos']])

            @livewire('crear-egreso', ['tipoEgresos' => $data['tipoEgresos']])

            <div class="bg-white shadow-lg text-center rounded-lg">
                <div class="my-2">
                    <div class="flex flex-col items-center py-10">
                        @if ($data['saldo'] < 1)
                            <p class="text-2xl font-semibold">Tu saldo es: <span class="text-red-500 font-bold">
                                    {{ $data['saldo'] }} </span></p>
                        @else
                            <p class="text-2xl font-semibold">Tu saldo es: <span class="text-green-500 font-bold">
                                    {{ $data['saldo'] }} </span></p>
                        @endif
                    </div>
                    <hr class="mt-2">
                    <div class="flex flex-col items-center">
                        <p class="font-bold py-4 text-gray-500">Ultimos 7 Dias</p>
                        <div>
                            <p class="text-lg font-semibold">Ingresos: <span class="text-green-500 font-bold">
                                    {{ $data['ingresosUltimaSemana'] }} </span></p>
                            <p class="text-lg font-semibold">Egresos: <span class="text-red-500 font-bold">
                                    {{ $data['egresosUltimaSemana'] }} </span></p>
                            @if ($data['totalUltimaSemana'] < 0)
                                <p class="text-lg font-semibold mt-6">Diferencia <span class="text-red-500 font-bold">
                                        {{ $data['totalUltimaSemana'] }} </span> sobre los ingresos</p>
                            @else
                                <p class="text-lg font-semibold mt-6">Tu saldo es: <span class="text-green-500 font-bold">
                                        {{ $data['totalUltimaSemana'] }} </span> sobre los ingresos </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="grid grid-cols-3 gap-3 container">
            <div class="bg-white shadow-lg text-center rounded-lg py-2">
                <x-jet-label class="pt-2 font-bold" value="Ultimos Ingresos" />
                <div class="p-2 container">
                    @if (count($data['ingresos']))
                        <table class="w-full">
                            <thead class="bg-gray-500">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Tipo Ingresos</th>
                                    <th>Valor </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['ingresos'] as $ingreso)
                                    <tr>
                                        <td>{{ $ingreso->fecha_registro }}</td>
                                        <td>{{ $ingreso->descripcion }}</td>
                                        <td>{{ $ingreso->valor }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a class="my-2 underline font-bold" href=" {{ route('ingresos') }} ">Ver todos los
                            Ingresos</a>
                    @else
                        <p class="font-semibold text-gray-400">No hay datos de Ingresos</p>
                    @endif
                </div>
            </div>
            <div class="bg-white shadow-lg text-center rounded-lg py-2">
                <x-jet-label class="pt-2 font-bold" value="Ultimos Egresos" />
                <div class="p-2 container">
                    @if (count($data['egresos']))
                        <table class="w-full">
                            <thead class="bg-gray-500">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Tipo Egreso</th>
                                    <th>Valor </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['egresos'] as $egreso)
                                    <tr>
                                        <td>{{ $egreso->fecha_registro }}</td>
                                        <td>{{ $egreso->descripcion }}</td>
                                        <td>{{ $egreso->valor }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a class="my-2 underline font-bold" href=" {{ route('egresos') }} ">Ver todos los Egresos</a>
                    @else
                        <p class="font-semibold text-gray-400">No hay datos de Egresos</p>
                    @endif
                </div>
            </div>
            <div class="bg-white shadow-lg text-center rounded-lg">
                <div id="element" class="flex x-auto" wire:ignore></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/fraseApi.js') }}"></script>

</div>
