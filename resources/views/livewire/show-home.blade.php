<div>
    <div class="py-12">
        <div class="grid grid-cols-3 gap-3 container">

            @livewire('crear-ingreso', ['tipoIngresos' => $data['tipoIngresos']])

            @livewire('crear-egreso', ['tipoEgresos' => $data['tipoEgresos']])

            <div class="bg-white shadow-lg text-center rounded-lg">
                <div class="my-2">
                    <div class="flex flex-col items-center py-10">
                        @if ($data['saldo'] < 0)
                            <p class="text-2xl font-semibold">Tu saldo es: <span class="text-red-500 font-bold">
                                    {{ $data['saldo'] }} </span></p>
                        @else
                            <p class="text-2xl font-semibold">Tu saldo es: <span class="text-green-500 font-bold">
                                    {{ $data['saldo'] }} </span></p>
                        @endif
                    </div>
                    <hr class="mt-2">
                    <div class="flex flex-col items-center">
                        <p class="font-bold py-4 text-red-500">Principales Egresos</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="grid grid-cols-3 gap-3 container">
            <div class="bg-white shadow-lg text-center rounded-lg">
                test
            </div>
            <div class="bg-white shadow-lg text-center rounded-lg">
                test
            </div>
            <div class="bg-white shadow-lg text-center rounded-lg">
                test
            </div>
        </div>
    </div>
</div>
