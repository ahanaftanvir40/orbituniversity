<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\{state, mount, on};

state(['path', 'user']);

$signOut = function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    $this->redirectRoute('sign-in', navigate: true);
};

on(['refresh-sidebar' => function () {
    $this->user = Auth::user();
}]);

mount(function ($path) {
    $this->path = $path;
    $this->user = Auth::user();
});
?>

<div class="w-full h-full flex flex-col py-4 pl-4 text-white">
    <div class="flex flex-col grow gap-6 p">
        <div class="border border-blue-600 rounded-2xl py-4 relative after:content-[''] after:absolute after:inset-0 after:rounded-2xl after:border-2 after:border-blue-400/50 after:blur-[2px] after:z-[-1] shadow-[0_0_8px_rgba(59,130,246,0.3)] ">
            <div class="flex-none text-center inter-700 text-xs sm:text-3xl px-2">The Orbit <br> University</div>
            <div class="flex-none grid grid-cols-1 gap-2 p-4">
                <div>
                    <img class="mx-auto size-10 sm:size-20" src="{{asset('images/scrollDesign1.png')}}">
                </div>
                <div class="text-center text-xl inter-500 max-sm:hidden">{{$user->name}}</div>
                <div class="text-center max-sm:hidden">{{$user->email}}</div>
            </div>
        </div>
    <div class="grow relative border border-blue-600 py-5 rounded-2xl after:content-[''] after:absolute after:inset-0 after:rounded-2xl after:border-2 after:border-blue-400/50 after:blur-[2px] after:z-[-1] shadow-[0_0_8px_rgba(59,130,246,0.3)]" x-data="{ height: 0 }" x-resize="height = $height">
        <div class="overflow-y-auto absolute inset-x-0 px-2" :style="'height: ' + height + 'px;'">
            <div class="grid grid-cols-1 gap-2">
                <a href="/dashboard" wire:navigate>
                    <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg @if($path == 'dashboard') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 @if($path == 'dashboard') text-blue-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z" />
                            </svg>
                        </div>
                        <div class="truncate inter-400 text-sm max-sm:hidden">Dashboard</div>
                    </div>
                </a>
                <a href="/program" wire:navigate>
                    <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg @if($path == 'program' || $path == 'add-program') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 @if(in_array($path , ['program' , 'add-program' , 'video' , 'add-video'])) text-blue-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5Zm16 14a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2ZM4 13a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6Zm16-2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6Z" />
                            </svg>
                        </div>
                        <div class="truncate inter-400 text-sm max-sm:hidden">Your Programs</div>
                    </div>
                </a>
                <a href="/zen-mode" wire:navigate>
                    <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg @if($path == 'zen-mode') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 @if($path == 'zen-mode') text-blue-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 18V6l8 6-8 6Z" />
                            </svg>
                        </div>
                        <div class="truncate inter-400 text-sm max-sm:hidden">Zen Mode</div>
                    </div>
                </a>
                <a href="/competitive-analysis" wire:navigate>
                    <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg hover:bg-white/30 transition-colors duration-200">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg>
                        </div>
                        <div class="truncate inter-400 text-sm max-sm:hidden">Community</div>
                    </div>
                </a>
                <a href="/orbit-brain" wire:navigate>
                    <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg @if($path == 'orbit-brain') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 @if($path == 'orbit-brain') text-blue-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8.5 12a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0Z"/>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14 7.5a6.472 6.472 0 0 0-8.7 1.2 6.5 6.5 0 0 0 8.7 9.6 6.472 6.472 0 0 0 2.7-4.3 6.5 6.5 0 0 0-2.7-6.5Z"/>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 15.5a6.509 6.509 0 0 1-2.7-6.5A6.501 6.501 0 0 1 16 8.7a6.5 6.5 0 0 1-6 6.8Z"/>
                            </svg>
                        </div>
                        <div class="truncate inter-400 text-sm max-sm:hidden">Orbit Brain</div>
                    </div>
                </a>
                <a href="/leaderboards" wire:navigate>
                    <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg @if($path == 'leaderboards') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 @if($path == 'leaderboards') text-blue-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 22V12m0 0V2h6v10m-6 0h6m0 0v10M4 5v14m16 0V5M4 8h4m8 11h4" />
                            </svg>
                        </div>
                        <div class="truncate inter-400 text-sm max-sm:hidden">Leaderboards</div>
                    </div>
                </a>
                <a href="/events" wire:navigate>
                    <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg @if($path == 'events') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 @if($path == 'events') text-blue-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 9h18m-5 4v-6m-1 11H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2a2 2 0 0 0-2 2v2a1 1 0 0 1-1 1Z"/>
                            </svg>
                        </div>
                        <div class="truncate inter-400 text-sm max-sm:hidden">Events & Live Sessions</div>
                    </div>
                </a>
                <a href="/affiliate" wire:navigate>
                    <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg @if($path == 'affiliate') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 @if($path == 'affiliate') text-blue-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>
                        </div>
                        <div class="truncate inter-400 text-sm max-sm:hidden">Affiliate</div>
                    </div>
                </a>
                <a href="/setting" wire:navigate>
                    <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg @if($path == 'setting') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 @if($path == 'setting') text-blue-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                        </div>
                        <div class="truncate inter-400 text-sm max-sm:hidden">Settings</div>
                    </div>
                </a>

                <a href="/mission" wire:navigate>
                    <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg @if($path == 'mission') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 @if($path == 'mission') text-blue-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v13m0-13c-2.5-1-5-1-7 .5V18c2-1 4-1 7-.5m0-11.5c2.5-1 5-1 7 .5V18c-2-1-4-1-7-.5"/>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7.5a3 3 0 0 1-3-3h-4v3a3 3 0 0 1-3 3"/>
                            </svg>
                        </div>
                        <div class="truncate inter-400 text-sm max-sm:hidden">Mission & Badges</div>
                    </div>
                </a>
                <div wire:click="signOut" class="cursor-pointer">
                <div class="flex justify-start gap-3 items-center px-2 py-1.5 rounded-lg hover:bg-white/30 transition-colors duration-200">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 sm:h-6 sm:w-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                        </svg>
                    </div>
                    <div class="truncate inter-400 text-sm max-sm:hidden">Sign Out</div>
                </div>
            </div>
            </div>
        </div>
    </div>

    </div>
</div>