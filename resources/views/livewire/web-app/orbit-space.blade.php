<?php

use function Livewire\Volt\{state, mount};



?>

<div class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full rounded-xl border-t border-r border-l border-blue-600 overflow-hidden relative">
    <!-- Multiple glow layers for enhanced effect -->
    <div class="absolute inset-0 rounded-xl border-t border-r border-l border-blue-400/40 blur-[1px] z-[-1]"></div>
    <div class="absolute inset-0 rounded-xl border-t border-r border-l border-blue-400/20 blur-[4px] z-[-2]"></div>
    <div class="absolute -inset-1  rounded-xl blur-[8px] z-[-3]"></div>
    <div class="flex h-[980px]">
        <div class='flex '>
        <div class="w-[250px] shadow-md shadow-blue-500 relative border-r rounded-xl border-t border-b  mt-[92px] border-blue-600 p-4 flex flex-col space-y-4">
            <div class='absolute h-10 w-6 bg-black top-[-30px] left-[2px]'>
                

            </div>    
            <div class='mt-52 p-4'>

            <div class="rounded-lg border border-blue-600/60 p-10 flex justify-center mb-8">
            <div class="border-blue-600/50 flex items-center justify-center">
                <div class=" flex items-center justify-center text-blue-300 overflow-hidden">

                
                
                <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-28 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                

                </div>
            </div>
            </div>
                
                
            <div class="rounded-lg border-[3px] border-blue-600 p-10 flex justify-center mb-8 relative after:content-[''] after:absolute after:inset-0 after:rounded-2xl after:border-1 after:border-blue-400/50 after:blur-[2px] after:z-[-1] shadow-[0_0_8px_rgba(59,130,246,0.3)]">
                
            <div class=" flex items-center justify-center">
                <div class=" flex items-center justify-center text-blue-300 overflow-hidden">

                
                
                <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-28 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                

                </div>
            </div>
            </div>
                
            <div class="rounded-lg border border-blue-600/60 p-10 flex justify-center mb-8">
            <div class="border-blue-600/50 flex items-center justify-center">
                <div class=" flex items-center justify-center text-blue-300 overflow-hidden">

                
                
                <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-28 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                

                </div>
            </div>
            </div>

            </div>
        </div>
            
        </div>
          
          
          <div class="flex-1 flex flex-col relative">

            <div class='absolute h-10 w-10 bg-black right-[2px] top-20'></div>
            
            <div class="text-center py-6">
              <h1 class="text-[#00BFFF] text-5xl font-semi-bold tracking-wider">ORBIT SPACE</h1>
              
            </div>
            
            
            <!-- <div class="px-6 pb-6">
              <h2 class="text-blue-400 text-3xl  text-center"># GENERAL CHAT</h2>
            </div> -->
            
            
            <div class="flex-1  px-14 overflow-y-auto border-blue-600 shadow-md  shadow-blue-500 border-t border-b border-l rounded-xl ml-8 ">

    
    
            <div class=" ">
              <h2 class="text-[#00BFFF] text-3xl py-12 text-center mr-8 "># GENERAL CHAT</h2>
            </div>
            <div class='flex flex-col'>

            </div>
            <div class=" border h-[600px] border-blue-600 shadow-sm shadow-blue-500 rounded-lg p-4 mb-4">
                
                <div class="flex items-start mb-4">
                <div class="w-14 h-14 rounded-full flex items-center justify-center bg-blue-500/20 mr-3 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  <div>
                    <div class="flex items-baseline">
                      <span class="text-[#00BFFF] font-medium mr-2">User123</span>
                      <span class="text-[#00bfffa8] text-xs">10:15 AM</span>
                    </div>
                    <p class="text-[#00BFFF]">Hello everyone!</p>
                  </div>
                </div>
                
                
                <div class="flex items-start mb-4">
                  <div class="w-14 h-14 rounded-full flex items-center justify-center bg-blue-500/20 mr-3 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  <div>
                    <div class="flex items-baseline">
                      <span class="text-[#00BFFF] font-medium mr-2">User456</span>
                      <span class="text-[#00bfffa8] text-xs">10:30 AM</span>
                    </div>
                    <p class="text-[#00BFFF]">Hi! Welcome to the chat!</p>
                  </div>
                </div>
                
                
                <div class="flex items-start mb-4">
                  <div class="w-14 h-14 rounded-full flex items-center justify-center bg-blue-500/20 mr-3 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  <div>
                    <div class="flex items-baseline">
                      <span class="text-[#00BFFF] font-medium mr-2">User123</span>
                      <span class="text-[#00bfffa8] text-xs">10:32 AM</span>
                    </div>
                    <p class="text-[#00BFFF]">Thanks!</p>
                  </div>
                </div>
                
               
                <div class="flex items-start mb-4">
                  <div class="w-14 h-14 rounded-full flex items-center justify-center bg-blue-500/20 mr-3 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  <div>
                    <div class="flex items-baseline">
                      <span class="text-[#00BFFF] font-medium mr-2">User789</span>
                      <span class="text-[#00bfffa8] text-xs">10:34 AM</span>
                    </div>
                    <p class="text-[#00BFFF]">Does anyone need help?</p>
                  </div>
                </div>

                <div class="flex items-start mb-4">
                  <div class="w-14 h-14 rounded-full flex items-center justify-center bg-blue-500/20 mr-3 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  <div>
                    <div class="flex items-baseline">
                      <span class="text-[#00BFFF] font-medium mr-2">User123</span>
                      <span class="text-[#00bfffa8] text-xs">10:32 AM</span>
                    </div>
                    <p class="text-[#00BFFF]">Yes!</p>
                  </div>
                </div>

                                <div class="flex items-start mb-4">
                  <div class="w-14 h-14 rounded-full flex items-center justify-center bg-blue-500/20 mr-3 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  <div>
                    <div class="flex items-baseline">
                      <span class="text-[#00BFFF] font-medium mr-2">User123</span>
                      <span class="text-[#00bfffa8] text-xs">10:32 AM</span>
                    </div>
                    <p class="text-[#00BFFF]">Bye everyone</p>
                  </div>
                </div>

                                <div class="flex items-start mb-4">
                  <div class="w-14 h-14 rounded-full flex items-center justify-center bg-blue-500/20 mr-3 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  <div>
                    <div class="flex items-baseline">
                      <span class="text-[#00BFFF] font-medium mr-2">User123</span>
                      <span class="text-[#00bfffa8] text-xs">10:32 AM</span>
                    </div>
                    <p class="text-[#00BFFF]">Going offline.</p>
                  </div>
                </div>

                <div class="flex items-start mb-4">
                  <div class="w-14 h-14 rounded-full flex items-center justify-center bg-blue-500/20 mr-3 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  <div>
                    <div class="flex items-baseline">
                      <span class="text-[#00BFFF] font-medium mr-2">User123</span>
                      <span class="text-[#00bfffa8] text-xs">10:32 AM</span>
                    </div>
                    <p class="text-[#00BFFF]">Anyone There?</p>
                  </div>
                </div>


              </div>
              <div class='h-fit '>
            <div class="">
              <div class="flex items-center  border border-blue-600 rounded-lg p-5 shadow-blue-500 shadow-sm">
                <button class="text-[#00BFFF] px-2  pb-2">
                  <span class="text-3xl">+</span>
                </button>
                <input 
                  type="text" 
                  placeholder="Message-#general-chat" 
                  class="bg-transparent flex-1 text-blue-200 focus:outline-none px-2"
                />
                <button class="text-blue-400 px-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9-9m0 0l9 9m-9-9v18" />
                  </svg>
                </button>
              </div>
            </div>
              </div>
            </div>
            
            
            <!-- <div class="p-4">
              <div class="flex items-center bg-gray-900 border border-blue-600/30 rounded-lg p-2">
                <button class="text-blue-400 px-2">
                  <span class="text-xl">+</span>
                </button>
                <input 
                  type="text" 
                  placeholder="Message-#general-chat" 
                  class="bg-transparent flex-1 text-blue-200 focus:outline-none px-2"
                />
                <button class="text-blue-400 px-2">
                  <span class="transform rotate-45 inline-block">&#9906;</span>
                </button>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>