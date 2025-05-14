<?php

use function Livewire\Volt\{state, mount};

state([
    'activeTab' => 'learners',  // Changed default to learners
    'timeFilter' => 'all_time',
    'programFilter' => 'all_programs',
    'leaderboardData' => [],
    'userPosition' => 0,
    'userProgress' => [
        'courses_completed' => 0,
        'total_courses' => 10,
        'videos_watched' => 0,
        'total_videos' => 30,
        'current_streak' => 0
    ],
    // New dummy data for top earners
    'topEarnersData' => [],
    'userReferralStats' => [
        'total_referrals' => 75,
        'earnings' => 2500,
        'next_milestone' => 5
    ]
]);

mount(function() {
    // Check if tab is set in the URL and update activeTab
    if (request()->has('tab')) {
        $this->activeTab = request()->get('tab');
    }
    
    // Original top learners data (renamed from leaderboardData)
    $this->leaderboardData = [
        [
            'rank' => 1,
            'username' => 'User1',
            'avatar' => 'yellow',
            'courses_done' => 15,
            'videos_watched' => 45,
            'badges' => 8
        ],
        [
            'rank' => 2,
            'username' => 'User8',
            'avatar' => 'green',
            'courses_done' => 10,
            'videos_watched' => 35,
            'badges' => 5
        ],
        [
            'rank' => 3,
            'username' => 'User5',
            'avatar' => 'yellow',
            'courses_done' => 14,
            'videos_watched' => 40,
            'badges' => 7
        ],
        [
            'rank' => 4,
            'username' => 'User3',
            'avatar' => 'purple',
            'courses_done' => 9,
            'videos_watched' => 30,
            'badges' => 4
        ],
        [
            'rank' => 5,
            'username' => 'User7',
            'avatar' => 'teal',
            'courses_done' => 11,
            'videos_watched' => 37,
            'badges' => 6
        ],
        [
            'rank' => 6,
            'username' => 'User2',
            'avatar' => 'blue',
            'courses_done' => 13,
            'videos_watched' => 42,
            'badges' => 8
        ],
        [
            'rank' => 7,
            'username' => 'User6',
            'avatar' => 'orange',
            'courses_done' => 8,
            'videos_watched' => 28,
            'badges' => 3
        ],
        [
            'rank' => 8,
            'username' => 'User4',
            'avatar' => 'blue',
            'courses_done' => 12,
            'videos_watched' => 38,
            'badges' => 6
        ],
    ];
    
    // New dummy data for top earners
    $this->topEarnersData = [
        [
            'rank' => 1,
            'username' => '@username',
            'avatar' => 'blue',
            'total_referrals' => 500,
            'referral_income' => 15500
        ],
        [
            'rank' => 2,
            'username' => '@username',
            'avatar' => 'blue',
            'total_referrals' => 250,
            'referral_income' => 8250
        ],
        [
            'rank' => 3,
            'username' => '@username',
            'avatar' => 'blue',
            'total_referrals' => 210,
            'referral_income' => 6300
        ],
        [
            'rank' => 4,
            'username' => '@username',
            'avatar' => 'blue',
            'total_referrals' => 185,
            'referral_income' => 5200
        ],
        [
            'rank' => 5,
            'username' => '@username',
            'avatar' => 'blue',
            'total_referrals' => 175,
            'referral_income' => 4750
        ],
        [
            'rank' => 6,
            'username' => '@username',
            'avatar' => 'blue',
            'total_referrals' => 150,
            'referral_income' => 4200
        ],
        [
            'rank' => 7,
            'username' => '@username',
            'avatar' => 'blue',
            'total_referrals' => 130,
            'referral_income' => 3800
        ],
        [
            'rank' => 8,
            'username' => '@username',
            'avatar' => 'blue',
            'total_referrals' => 115,
            'referral_income' => 3450
        ],
        [
            'rank' => 9,
            'username' => '@username',
            'avatar' => 'blue',
            'total_referrals' => 105,
            'referral_income' => 3000
        ],
    ];
    
    $this->userPosition = 24; // Example position
});

?>

<div class="grow sm:border mb-4  mt-4 border-blue-600 rounded-2xl mx-3 text-white font-sans sm:relative sm:after:content-[''] sm:after:absolute sm:after:inset-0 sm:after:rounded-2xl sm:after:border-2 sm:after:border-blue-400/50 sm:after:blur-[2px] sm:after:z-[-1] sm:shadow-[0_0_8px_rgba(59,130,246,0.3)]">
    <div class="grow container mx-auto px-4 sm:px-6 md:px-8 py-4 sm:py-6 md:py-8 w-full">
        <!-- Page Header -->
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-6">{{ $activeTab == 'earners' ? 'Top Earner Leaderboard' : 'Top Learner Leaderboard' }}</h1>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-6 lg:gap-8">
            <!-- Left Column - Leaderboard -->
            <div class="lg:col-span-8">
                <!-- Tabs -->
                <div class="flex mb-6">
                    <div class="flex w-full">
                        <a href="{{ route('leaderboards', ['tab' => 'earners', 'time_filter' => $timeFilter, 'program_filter' => $programFilter]) }}" 
                            class="sm:px-6 py-2 px-3 sm:py-3 border text-sm sm:text-md border-gray-700 transition-all flex-grow sm:flex-grow-0 {{ $activeTab == 'earners' ? 'bg-opacity-10 bg-[#00BFFF] text-[#00BFFF] border-[#00BFFF]' : 'text-gray-400' }} rounded-l-full font-semibold text-center">
                            Top Earners
                        </a>
                        <a href="{{ route('leaderboards', ['tab' => 'learners', 'time_filter' => $timeFilter, 'program_filter' => $programFilter]) }}" 
                            class="sm:px-6 py-2 px-2 sm:py-3 border text-sm sm:text-md border-gray-700 transition-all flex-grow sm:flex-grow-0 {{ $activeTab == 'learners' ? 'bg-opacity-10 bg-[#00BFFF] text-[#00BFFF] border-[#00BFFF]' : 'text-gray-400' }} rounded-r-full font-semibold text-center">
                            Top Learners
                        </a>
                    </div>
                </div>
                
                <!-- Filters -->
                <div class="flex flex-col sm:flex-row gap-3 mb-4 sm:mb-6">
                    <div class="flex flex-col sm:flex-row gap-3 w-full">
                        <select id="timeFilter" onchange="updateFilters()" 
                            class="bg-black bg-opacity-30 outline-none border border-blue-600 rounded-2xl px-3 sm:px-4 py-2 sm:py-3 w-full appearance-none focus:outline-none text-white cursor-pointer bg-[url('data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2020%2020%22%3E%3Cpath%20d%3D%22M9.293%2012.95l.707.707L15.657%208l-1.414-1.414L10%2010.828%205.757%206.586%204.343%208z%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:calc(100%-15px)_50%] bg-[length:20px_20px] pr-10 text-sm sm:text-base">
                            <option value="all_time" {{ $timeFilter == 'all_time' ? 'selected' : '' }} class="bg-black">Time Period</option>
                            <option value="all_time" {{ $timeFilter == 'all_time' ? 'selected' : '' }} class="bg-black">All Time</option>
                            <option value="last_month" {{ $timeFilter == 'last_month' ? 'selected' : '' }} class="bg-black">Last Month</option>
                            <option value="last_week" {{ $timeFilter == 'last_week' ? 'selected' : '' }} class="bg-black">Last Week</option>
                        </select>
                        
                        <select id="programFilter" onchange="updateFilters()" 
                            class="bg-black bg-opacity-30 outline-none border border-blue-600 rounded-2xl px-3 sm:px-4 py-2 sm:py-3 w-full appearance-none focus:outline-none text-white cursor-pointer bg-[url('data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2020%2020%22%3E%3Cpath%20d%3D%22M9.293%2012.95l.707.707L15.657%208l-1.414-1.414L10%2010.828%205.757%206.586%204.343%208z%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:calc(100%-15px)_50%] bg-[length:20px_20px] pr-10 text-sm sm:text-base">
                            <option value="all_programs" {{ $programFilter == 'all_programs' ? 'selected' : '' }} class="bg-black">Program</option>
                            <option value="all_programs" {{ $programFilter == 'all_programs' ? 'selected' : '' }} class="bg-black">All Programs</option>
                            <option value="programming" {{ $programFilter == 'programming' ? 'selected' : '' }} class="bg-black">Programming</option>
                            <option value="design" {{ $programFilter == 'design' ? 'selected' : '' }} class="bg-black">Design</option>
                        </select>
                    </div>
                </div>
                
                <script>
                function updateFilters() {
                    const timeFilter = document.getElementById('timeFilter').value;
                    const programFilter = document.getElementById('programFilter').value;
                    const tab = '{{ $activeTab }}';
                    
                    window.location.href = '{{ route('leaderboards') }}' + 
                        '?tab=' + tab + 
                        '&time_filter=' + timeFilter + 
                        '&program_filter=' + programFilter;
                }
                </script>
                
                <!-- Leaderboard Table -->
                <div class="border border-blue-600 rounded-2xl overflow-hidden relative after:content-[''] after:absolute after:inset-0 after:rounded-2xl after:border-1 after:border-blue-400/50 after:blur-[2px] after:z-[-1] shadow-[0_0_8px_rgba(59,130,246,0.3)]">
                    <div class="max-h-[400px] sm:max-h-[500px] md:max-h-[600px] overflow-y-auto">
                        <div class="overflow-x-auto">
                            @if($activeTab == 'learners')
                            <!-- Top Learners Table -->
                            <table class="w-full text-center min-w-[600px]">
                                <thead class="bg-black border-b border-blue-600 sticky top-0 z-10">
                                    <tr>
                                        <th class="p-2 sm:p-3 md:p-4 font-semibold text-gray-300 text-sm sm:text-base text-center">Rank</th>
                                        <th class="p-2 sm:p-3 md:p-4 font-semibold text-gray-300 text-sm sm:text-base text-center">User</th>
                                        <th class="p-2 sm:p-3 md:p-4 font-semibold text-gray-300 text-sm sm:text-base text-center">Courses Done</th>
                                        <th class="p-2 sm:p-3 md:p-4 font-semibold text-gray-300 text-sm sm:text-base text-center">Videos Watched</th>
                                        <th class="p-2 sm:p-3 md:p-4 font-semibold text-gray-300 text-sm sm:text-base text-center">Badges</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($leaderboardData as $user)
                                    <tr class="{{ $loop->even ? 'bg-white bg-opacity-[0.03]' : '' }} hover:shadow-[0_0_8px_rgba(0,191,255,0.5)] relative">
                                        <td class="p-2 sm:p-3 md:p-4 text-sm sm:text-base text-center">{{ $user['rank'] }}</td>
                                        <td class="p-2 sm:p-3 flex items-center justify-center space-x-2 text-sm sm:text-base">
                                            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full flex items-center justify-center font-bold text-black 
                                                {{ $user['avatar'] == 'yellow' ? 'bg-[#FFC107]' : '' }}
                                                {{ $user['avatar'] == 'purple' ? 'bg-[#BB86FC]' : '' }}
                                                {{ $user['avatar'] == 'blue' ? 'bg-[#00BFFF]' : '' }}
                                                {{ $user['avatar'] == 'teal' ? 'bg-[#4DD0E1]' : '' }}
                                                {{ $user['avatar'] == 'green' ? 'bg-[#4CAF50]' : '' }}
                                                {{ $user['avatar'] == 'orange' ? 'bg-[#FF9800]' : '' }}">
                                                {{ substr($user['username'], 1, 1) }}
                                            </div>
                                            <span>{{ $user['username'] }}</span>
                                        </td>
                                        <td class="p-2 sm:p-3 md:p-4 text-sm sm:text-base text-center">{{ $user['courses_done'] }}</td>
                                        <td class="p-2 sm:p-3 md:p-4 text-sm sm:text-base text-center">{{ $user['videos_watched'] }}</td>
                                        <td class="p-2 sm:p-3 md:p-4 text-sm sm:text-base text-center">
                                            @if($loop->first)
                                                @for($i = 0; $i < min($user['badges'], 1); $i++)
                                                    ⭐
                                                @endfor
                                            @else
                                                {{ $user['badges'] }}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <!-- Top Earners Table -->
                            <table class="w-full text-center min-w-[600px]">
                                <thead class="bg-black border-b border-blue-600 sticky top-0 z-10">
                                    <tr>
                                        <th class="p-2 sm:p-3 md:p-4 font-semibold text-gray-300 text-sm sm:text-base text-center">#</th>
                                        <th class="p-2 sm:p-3 md:p-4 font-semibold text-gray-300 text-sm sm:text-base text-left">Avatar + | Username</th>
                                        <th class="p-2 sm:p-3 md:p-4 font-semibold text-gray-300 text-sm sm:text-base text-center">Total Referrals</th>
                                        <th class="p-2 sm:p-3 md:p-4 font-semibold text-gray-300 text-sm sm:text-base text-center">Referral Income</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($topEarnersData as $user)
                                    <tr class="{{ $loop->even ? 'bg-white bg-opacity-[0.03]' : '' }} hover:shadow-[0_0_8px_rgba(0,191,255,0.5)] relative">
                                        <td class="p-2 sm:p-3 md:p-4 text-sm sm:text-base text-center">{{ $user['rank'] }}</td>
                                        <td class="p-2 sm:p-3 flex items-center space-x-2 text-sm sm:text-base">
                                            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full flex items-center justify-center font-bold text-black bg-[#00BFFF]">
                                                {{ substr($user['username'], 1, 1) }}
                                            </div>
                                            <span>{{ $user['username'] }}</span>
                                        </td>
                                        <td class="p-2 sm:p-3 md:p-4 text-sm sm:text-base text-center">{{ $user['total_referrals'] }}</td>
                                        <td class="p-2 sm:p-3 md:p-4 text-sm sm:text-base text-center">${{ number_format($user['referral_income']) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - User Stats -->
            <div class="lg:col-span-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 sm:gap-6 mt-4 lg:mt-0">
                @if($activeTab == 'learners')
                <!-- Your Position Panel -->
                <div class="bg-black border bg-opacity-20 rounded-2xl border-blue-600 p-4 sm:p-6 lg:mt-[72px] relative after:content-[''] after:absolute after:inset-0 after:rounded-2xl after:border-1 after:border-blue-400/50 after:blur-[2px] after:z-[-1] shadow-[0_0_8px_rgba(59,130,246,0.3)]">
                    <h2 class="text-xl sm:text-2xl font-bold mb-1 sm:mb-2">Your Position</h2>
                    <div class="text-[#00BFFF] text-4xl sm:text-5xl md:text-6xl font-bold mb-1 sm:mb-2">{{ $userPosition }}</div>
                    <p class="text-gray-300 mb-4 sm:mb-6 text-sm sm:text-base">Keep going!<br>Complete 2 more courses to reach Top 20.</p>
                    <a href="#" class="block bg-[#00BFFF] text-black font-semibold py-2 sm:py-3 px-4 sm:px-6 rounded-full text-center hover:opacity-90 hover:-translate-y-0.5 transition-all text-sm sm:text-base">
                        Continue Learning
                    </a>
                </div>
                
                <!-- Progress Overview Panel -->
                <div class="bg-black bg-opacity-20 border border-blue-600 rounded-2xl p-4 sm:p-6 relative after:content-[''] after:absolute after:inset-0 after:rounded-2xl after:border-1 after:border-blue-400/50 after:blur-[2px] after:z-[-1] shadow-[0_0_8px_rgba(59,130,246,0.3)]">
                    <h2 class="text-xl sm:text-2xl font-bold mb-4 sm:mb-6">Progress overview</h2>
                    
                    <!-- Courses Progress -->
                    <div class="mb-3 sm:mb-4">
                        <div class="flex justify-between mb-1 sm:mb-2 text-sm sm:text-base">
                            <span>Courses Completed</span>
                            <span>{{ $userProgress['courses_completed'] }} / {{ $userProgress['total_courses'] }}</span>
                        </div>
                        <div class="h-1.5 sm:h-2 bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-full bg-[#BB86FC]" style="width: {{ ($userProgress['courses_completed'] / $userProgress['total_courses']) * 100 }}%"></div>
                        </div>
                    </div>
                    
                    <!-- Videos Progress -->
                    <div class="mb-3 sm:mb-4">
                        <div class="flex justify-between mb-1 sm:mb-2 text-sm sm:text-base">
                            <span>Videos Watched</span>
                            <span>{{ $userProgress['videos_watched'] }} / {{ $userProgress['total_videos'] }}</span>
                        </div>
                        <div class="h-1.5 sm:h-2 bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-full bg-[#00BFFF]" style="width: {{ ($userProgress['videos_watched'] / $userProgress['total_videos']) * 100 }}%"></div>
                        </div>
                    </div>
                    
                    <!-- Current Streak -->
                    <div class="flex justify-between text-sm sm:text-base">
                        <span>Current Streak</span>
                        <span>{{ $userProgress['current_streak'] }} Days</span>
                    </div>
                </div>
                @else
                <!-- Your Referral Stats Panel -->
                <div class="bg-black border bg-opacity-20 rounded-2xl border-blue-600 p-4 sm:p-6 relative after:content-[''] after:absolute after:inset-0 after:rounded-2xl after:border-1 after:border-blue-400/50 after:blur-[2px] after:z-[-1] shadow-[0_0_8px_rgba(59,130,246,0.3)]">
                    <h2 class="text-xl sm:text-2xl font-bold mb-4 sm:mb-6">Your Referral Stats</h2>
                    
                    <!-- Total Referrals -->
                    <div class="mb-4 sm:mb-6">
                        <h3 class="text-base sm:text-lg text-gray-300 mb-1">Your Total Referrals</h3>
                        <div class="text-3xl sm:text-4xl font-bold">{{ $userReferralStats['total_referrals'] }}</div>
                    </div>
                    
                    <!-- Earnings -->
                    <div class="mb-4 sm:mb-6">
                        <h3 class="text-base sm:text-lg text-gray-300 mb-1">Your Earnings</h3>
                        <div class="text-3xl sm:text-4xl font-bold text-[#00BFFF]">${{ number_format($userReferralStats['earnings']) }}</div>
                    </div>
                    
                    <!-- Referral Link -->
                    <div class="mb-4 sm:mb-6">
                        <div class="flex items-center bg-black bg-opacity-30 border border-blue-600 rounded-full overflow-hidden">
                            <div class="flex-1 px-4 py-2 text-gray-300 truncate">https://t.co/A7bC3d4</div>
                            <button class="bg-black bg-opacity-50 px-4 py-2 text-white font-medium hover:bg-opacity-70 transition-all">
                                Copy
                            </button>
                        </div>
                    </div>
                    
                    <!-- Next Reward -->
                    <div class="mb-4 sm:mb-6">
                        <h3 class="text-base sm:text-lg mb-1">Next Reward Milestone</h3>
                        <p class="text-gray-300">Refer {{ $userReferralStats['next_milestone'] }} more to unlock a badge</p>
                    </div>
                    
                    <!-- Invite Button -->
                    <a href="#" class="block bg-indigo-600 text-white font-semibold py-2 sm:py-3 px-4 sm:px-6 rounded-full text-center hover:bg-indigo-700 hover:-translate-y-0.5 transition-all text-sm sm:text-base">
                        Invite Friends Now
                    </a>
                </div>
                @endif
            </div>
        </div>
        
        <!-- Footer -->
        <div class="text-center text-base sm:text-lg mt-8 sm:mt-12 text-white">
            <p>Our mission: empower 100,000 learners by 2026.</p>
        </div>
    </div>
</div>