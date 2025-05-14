<?php

use function Livewire\Volt\{state, mount};

?>


<div class="main mt-4 sm:mt-12">
    <div class="max-w-full mx-auto px-4 py-8  flex flex-col justify-center items-center">
        <div class='header text-[#00BFFF] w-fit  mx-auto'>
            <h1 class='text-5xl text-center inter-400 tracking-wide '>EVENTS & LIVE SESSIONS</h1>
        </div>
        <div class='paragraph  py-2'>
            <p class='text-center text-lg text-[#00BFFF] inter-300 '>Stay updated with exclusive workshops, guest lectures, mentorship, and more.</p>
        </div>
        <div class="event-container mt-12 rounded-xl border-blue-600 w-full border p-8  relative after:content-[''] after:absolute after:inset-0 after:rounded-2xl after:border-2 after:border-blue-400/50 after:blur-[2px] after:z-[-1] shadow-[0_0_8px_rgba(59,130,246,0.3)]">
            <div class='flex justify-between items-center mb-6'>
                <div class='Upcoming-txt'>
                    <h3 class='text-white text-2xl inter-300'>Upcoming Events</h3>
                </div>

                <div class='days text-[#00BFFF] text-lg'>
                    <span class='pr-8'>THIS WEEK</span>
                    <span class='text-[#00BFFF] inter-300 pr-8'>TUE</span>
                    <span class='text-[#00BFFF] inter-300'>T</span>
                </div>
            </div>

            <!-- Events Grid Layout -->
            <!-- <div class="grid grid-cols-4 gap-4">
                
                <div class="bg-gray-900 border border-blue-500 rounded-lg p-4 flex flex-col">
                    <div class="text-white text-lg font-medium mb-1">PROFILE Workshop</div>
                    <div class="text-gray-400 text-xs mb-4">May 12   11:00 AM</div>
                    <button class="mt-auto bg-transparent border border-blue-500 hover:bg-blue-900 text-blue-500 rounded px-4 py-1 text-sm">Set Reminder</button>
                </div>

                
                <div class="bg-gray-900 border border-blue-500 rounded-lg p-4 flex flex-col">
                    <div class="text-white text-lg font-medium mb-1">AMA with CEO</div>
                    <div class="text-gray-400 text-xs mb-4">May 15   3:00 PM</div>
                    <button class="mt-auto bg-transparent border border-blue-500 hover:bg-blue-900 text-blue-500 rounded px-4 py-1 text-sm">Set Reminder</button>
                </div>

                
                <div class="bg-gray-900 border border-blue-500 rounded-lg p-4 flex flex-col">
                    <div class="text-white text-lg font-medium mb-1">Design Lecture</div>
                    <div class="text-gray-400 text-xs mb-4">May 19   5:00 PM</div>
                    <button class="mt-auto bg-transparent border border-blue-500 hover:bg-blue-900 text-blue-500 rounded px-4 py-1 text-sm">Set Reminder</button>
                </div>
                
                
                <div class="bg-gray-900 border border-blue-500 rounded-lg p-4 flex flex-col c">
                    <div class="text-blue-500 text-sm font-bold mb-2">LIVE</div>
                    <div class="text-gray-400 text-xs mb-1">MON</div>
                    <div class="text-gray-400 text-xs mb-1">TUE</div>
                    <div class="text-gray-400 text-xs">WED</div>
                </div>
            </div> -->
            
                    <div class='cards flex gap-4  flex-wrap'>
                        <div class=" border border-blue-600 rounded-lg p-4 flex-1 flex-col">
                            <div class='card-header flex justify-between  items-center mb-2'>
                                <div class='card-text flex-1'>
                                    <div class="text-white text-2xl font-medium inter-400 ">PROFILE</div>
                                    <div class="text-white text-2xl font-medium inter-300 ">Workshop</div>

                                </div>
                                <div class='image'>
                                    <div class='h-20 w-20 border flex justify-center items-center rounded-full border-blue-500'>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class='dates flex items-center gap-10 '>
                                <div class="text-[#00bfffa8] text-md font-light inter-300">May 12</div>
                                <div class="text-[#00bfffa8] text-md font-light inter-300">11:00AM</div>
                            </div>
                            <div class='card-button flex justify-center items-center'>
                                <button class="mt-4 bg-transparent border w-[90%] border-blue-500 hover:text-blue-600 text-[#00BFFF] inter-300 font-light py-1.5 rounded-xl inter-300 text-md">Set Reminder</button>
                            </div>
                        </div>
                        <div class=" border border-blue-600 rounded-lg p-4 flex-1 flex-col">
                            <div class='card-header flex justify-between  items-center mb-2'>
                                <div class='card-text flex-1'>
                                    <div class="text-white text-2xl font-medium inter-400 ">AMA with</div>
                                    <div class="text-white text-2xl font-medium inter-300 ">CEO</div>

                                </div>
                                <div class='image'>
                                    <div class='h-20 w-20 border flex justify-center items-center rounded-full border-blue-500'>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class='dates flex items-center gap-10 '>
                                <div class="text-[#00bfffa8] text-md font-light inter-300">May 15</div>
                                <div class="text-[#00bfffa8] text-md font-light inter-300">3:00PM</div>
                            </div>
                            <div class='card-button flex justify-center items-center'>
                                <button class="mt-4 bg-transparent border w-[90%] border-blue-500 hover:text-blue-600 text-[#00BFFF] inter-300 font-light py-1.5 rounded-xl inter-300 text-md">Set Reminder</button>
                            </div>
                        </div>
                        <div class=" border border-blue-600 rounded-lg p-4 flex-1 flex-col">
                            <div class='card-header flex justify-between  items-center mb-2'>
                                <div class='card-text flex-1'>
                                    <div class="text-white text-2xl font-medium inter-400 ">Design</div>
                                    <div class="text-white text-2xl font-medium inter-300 ">Lecture</div>

                                </div>
                                <div class='image'>
                                    <div class='h-20 w-20 border flex justify-center items-center rounded-full border-blue-500'>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class='dates flex items-center gap-10 '>
                                <div class="text-[#00bfffa8] text-md font-light inter-300">May 19</div>
                                <div class="text-[#00bfffa8] text-md font-light inter-300">5:00PM</div>
                            </div>
                            <div class='card-button flex justify-center items-center'>
                                <button class="mt-4 bg-transparent border w-[90%] border-blue-500 hover:text-blue-600 text-[#00BFFF] inter-300 font-light py-1.5 rounded-xl inter-300 text-md">Set Reminder</button>
                            </div>
                        </div>
                        <div class=" border border-blue-600 rounded-lg p-4 px-10 flex- flex-col">
                            <div class="text-[#00bfffa8] text-2xl font-light inter-300 mb-2">LIVE</div>
                            <div class="flex items-center gap-2">
                                <div class="text-[#00bfffa8] text-lg font-light inter-300 ">MON</div>
                                <span class=" text-gray-500  p-1">☰</span>
                            </div>
                            <div class="text-[#00bfffa8] text-lg font-light inter-300 mb-1 w-1/2">TUE</div>
                            <div class="flex items-center gap-2">
                                <div class="text-[#00bfffa8] text-lg font-light inter-300 ">WED</div>
                                <span class=" text-gray-500  p-1">☰</span>
                            </div>
                            
                        </div>
                    </div>

            <div class='w-full  border-t border-blue-600 flex mt-12'>
                <div class='recorded-session w-[60%] max-h-[96%] border-r border-blue-600 py-12'>
                    <div class='flex justify-between items-center mb-6'>
                        <div class='recorded-txt'>
                            <h3 class='text-white text-2xl inter-300'>Recorded Sessions</h3>
                        </div>

                        <div class='days text-[#00BFFF] text-lg'>
                            <span class='pr-8'>APRIL 18</span>
                        </div>
                    </div>
                    <div class='cards flex gap-4 pr-8 flex-wrap'>
                        <div class=" border border-blue-600 rounded-lg p-4 flex-1 flex-col">
                            <div class="text-[#00bfffa8] text-lg font-light inter-300 mb-1">Apr 26</div>
                            <div class="text-white text-xl font-medium mb-1 inter-300">Marketing Strategies</div>
                            <div class="text-[#00bfffa8] text-md font-light inter-300 mb-1 w-1/2">Crysted growth hacks for creators</div>
                            <button class="mt-auto bg-transparent  border-blue-500 hover:text-blue-600 text-blue-500 rounded font-light inter-300 text-md">Watch Replay</button>
                        </div>
                        <div class=" border border-blue-600 rounded-lg p-4 flex-1 flex-col">
                            <div class="text-[#00bfffa8] text-lg font-light inter-300 mb-1">UPCOMING</div>
                            <div class="text-white text-xl font-medium mb-1 inter-300 ">Guest Lecture</div>
                            <div class="text-[#00bfffa8] text-md font-light inter-300 mb-1 w-1/2">Founder at 4 PM</div>
                            <button class="mt-4 bg-transparent  border-blue-500 hover:bg-blue-900 text-blue-500 rounded-xl px-4 py-1 border font-light inter-300 text-md">Watch Replay</button>
                        </div>
                    </div>
                </div>

                <div class='recorded-session-2 py-12 pl-8 w-[40%]'>
                        <div class='recorded-txt mb-6'>
                            <h3 class='text-white text-2xl inter-300'>Recorded Sessions</h3>
                        </div>
                        <div class='cards flex gap-4 mr-8  '>
                            <div class=" border border-blue-600 rounded-lg p-6 flex-1 flex-col inter-300">
                                <div class="text-white text-lg font-medium mb-1 w-1/2">Loved the AMA session with the founder! 🔥</div>
                                <div class="text-[#00bfffa8] text-xs mt-2 cursor-pointer">@alex_dev</div>
                            </div>
                        </div>
                         <div class="flex justify-center mr-8 mt-6">
                            <div class="flex space-x-2">
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                            </div>
                    </div>
                        <div class='button  flex justify-center items-center mt-6  mr-8'>
                            <button class=" bg-transparent border border-blue-600 hover:border-blue-700 text-blue-500 rounded-xl sm:px-28 sm:py-4 px-4 py-1 inter-400 text-md sm:text-xl">VIEW ALL EVENTS</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>