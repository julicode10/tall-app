<x-guest-layout>
    <div
        class="flex flex-col bg-indigo-900 h-screen"
        x-data="{showSubscribe: false}"
    >
        <nav class="pt-5 flex justify-between container mx-auto text-indigo-200">
            <a href="/" class="text-4xl font-bold">
                <x-application-logo class="w-16 h-16 fill-current" />
            </a>
            <div class="flex justify-end">
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        </nav>
        <div class="flex container mx-auto items-center h-full">
            <div class="flex w-1/3 flex-col items-start">
                <h1 class="font-bold text-white text-5xl leading-tight mb-4">
                    Simple generic landing page to subscribe
                </h1>
                <p class="text-indigo-200 text-xl mb-10">
                    We are just checking the <span class="font-bold underline">TALL</span> Stack. Would you mind subascribing?
                </p>
                <x-button type="button"
                    class="py-3 px-8 bg-red-500 hover:bg-red-600"
                    x-on:click="showSubscribe= true"
                >
                    Subscribe
                </x-button>
            </div>
        </div>
        <div
            class="flex fixed top-0 w-full h-full bg-gray-900 bg-opacity-60 items-center"
            x-show="showSubscribe"
            x-on:click.self="showSubscribe= false"
            x-on:keydown.escape.window="showSubscribe= false"
        >
            <div class="m-auto bg-pink-500 shadow-2xl rounded-xl p-8">
                <p class="text-white font-extrabold text-5xl text-center">Let´s do it!</p>
                <form class="flex flex-col items-center p-24">
                    <x-text-input
                        class="px-5 py-3 w-80 border border-blue-400"
                        type="email"
                        name="email"
                        placeholder="Email Address"
                    >
                    </x-text-input>
                    <span class="text-gray-100 text-xs">
                        We will send you a confirmation email.
                    </span>
                <x-button
                    type="submit"
                    class="px-5 py-3 mt-5 w-80 bg-blue-500 justify-center"
                >
                    Get In
                </x-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
