<form class="w-full lg:w-1/2" method="post" action="">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nome">
                Nome
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="nome" id="nome" type="text" placeholder="Nome *" required>
        </div>

        <div class="w-full lg:w-1/2 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cognome">
                Cognome
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="cognome" id="cognome" type="text" placeholder="Cognome *" required>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="username">
                Username
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="username" id="username" type="text" placeholder="Username *" required>
        </div>

        <div class="w-full lg:w-1/2 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                Password
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="password" id="password" type="password" placeholder="Password *" autocomplete="new-password"
                required>
        </div>
    </div>

    <div class="flex flex-wrap w-full">
        <div class="w-full mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sottodominio">
                Sotto Dominio
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="sottodominio" id="sottodominio" type="text" placeholder="sottodominio.host-falco96.com *"
                required>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                Email
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="email" id="email" type="email" placeholder="esempio@esempio.it *" required>
        </div>

        <div class="w-full lg:w-1/2 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="remail">
                Retype Email
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="remail" id="remail" type="email" placeholder="esempio@esempio.it *" required>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/4 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="indirizzo">
                Indirizzo
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="indirizzo" id="indirizzo" type="text" placeholder="Via Roma, 45 *" required>
        </div>

        <div class="w-full lg:w-1/4 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                Città
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="city " id="city" type="text" placeholder="Roma *" required>
        </div>

        <div class="w-full lg:w-1/4 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="state">
                Nazione
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="state" id="state" type="text" placeholder="Italia *" required>
        </div>

        <div class="w-full lg:w-1/4 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cap">
                CAP
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="cap" id="cap" type="text" placeholder="43001 *" required>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="codice-fiscale">
                Codice fiscale
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="codice-fiscale " id="codice-fiscale" type="text" placeholder="Codice Fiscale *">
        </div>

        <div class="w-full lg:w-1/2 mb-5 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="piva">
                Partita IVA
            </label>

            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="piva" id="piva" type="text" placeholder="Partita IVA *">
        </div>
    </div>

    <div class="flex flex-wrap items-center justify-center">
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit" name="sign-up">
            Sign Up
        </button>
    </div>
</form>