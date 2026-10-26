<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Iniciar Sesión - Sistema Hotelero</title>

        <!-- Carga de Tailwind v4 y JS mediante Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="bg-slate-100 flex items-center justify-center min-h-screen font-sans"
    >
        <div
            class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 border border-slate-200"
        >
            <!-- Encabezado -->
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-slate-800">
                    Sistema Hotelero
                </h1>
                <p class="text-sm text-slate-500 mt-1">
                    Ingresa tus credenciales para acceder
                </p>
            </div>

            <!-- Formulario de Login -->
            <form action="/login" method="POST" class="space-y-5">
                @csrf

                <!-- Correo Electrónico -->
                <div>
                    <label
                        for="email"
                        class="block text-sm font-medium text-slate-700 mb-1"
                    >
                        Correo Electrónico
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        autofocus
                        placeholder="ejemplo@hotel.com"
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition text-slate-800 placeholder-slate-400"
                    />
                </div>

                <!-- Contraseña -->
                <div>
                    <label
                        for="password"
                        class="block text-sm font-medium text-slate-700 mb-1"
                    >
                        Contraseña
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        placeholder="••••••••"
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition text-slate-800 placeholder-slate-400"
                    />
                </div>

                <!-- Recordar Sesión -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center cursor-pointer">
                        <input
                            type="checkbox"
                            name="remember"
                            class="w-4 h-4 text-indigo-600 border-slate-300 rounded focus:ring-indigo-500"
                        />
                        <span class="ml-2 text-sm text-slate-600"
                            >Recordar mi sesión</span
                        >
                    </label>
                </div>

                <!-- Botón de Envío -->
                <button
                    type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition duration-200 shadow-md hover:shadow-lg cursor-pointer"
                >
                    Iniciar Sesión
                </button>
            </form>
        </div>
    </body>
</html>
