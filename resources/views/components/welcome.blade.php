<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Bem-vindo ao seu Gestor Financeiro!
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
    O CoinWise oferece um sistema de cadastro e login de usuário para garantir a segurança e privacidade
    das suas informações financeiras. Você pode facilmente cadastrar seus ganhos e gastos, categorizá-los
    e até criar transações recorrentes. A plataforma permite visualizar suas finanças mensais e anuais, além de fornecer
    gráficos para uma análise visual.
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                Finanças
            </h2>
        </div>
        <p>O usuário poderá adicionar ganhos e gastos!</p>
        <br>
        <a href="{{ route('extrato') }}" class="mt-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Visualizar Extrato
        </a>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                Extrato
            </h2>
        </div>
        <p>O usuario poderá visualizar suas movimentações!</p>
        <br>
        <a href="{{ route('transfer.create') }}" class="mt-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Adicionar Transferência
        </a>
    </div>
</div>

