<form id="ai-search-form" autocomplete="off" novalidate>
    <div class="fixed bottom-6 right-6 flex flex-col items-end z-100 animate-self animate-children overflow-visible">
        {{-- AI Conversation Section --}}
        <x-cards.blurred-card bgShadow
            class="w-[430px] lg:w-[550px] hidden open:block closed:animate-fade-out-down open:animate-fade-in-up px-[24px] mb-4 rounded-2xl">
            <div class="text-center font-bold pt-4">
                <div class="text-[20px] text-(--text-primary-color)/80 pb-1">
                    XR's Assistant
                    <div class="italic text-[9px] text-(--text-primary-color)/15">
                        Powered by <a class="underline underline-offset-2 hover:text-(--text-primary-color)/80"
                            target="_blank" href="https://labeeb.aramco.com.sa">Labeeb
                            AI</a>
                    </div>
                </div>
                <div
                    class="mt-2 h-[0.8px] w-full bg-gradient-to-r from-transparent via-(--border-color) to-transparent">
                </div>
                <div id="ai-welcoming-container" class="overflow-hidden max-h-[300px] duration-800">
                    <div class="text-[42px] py-2 drop-shadow-2xl drop-shadow-indigo-400/70">👋</div>
                    <div class="text-[12px] font-normal opacity-30 pb-6">
                        Ask Me About Our Solutions!
                    </div>
                </div>
            </div>
            <div id="ai-conversation-container" class="hidden">
                <div id="ai-conversation"
                    class="max-h-[360px] flex flex-col gap-y-[16px] justify-start py-4 text-[14px] text-wrap overflow-x-hidden overflow-y-auto overscroll-contain no-scrollbar">
                    {{-- AI responses appended here, using JS --}}
                </div>
            </div>
        </x-cards.blurred-card>

        {{-- AI Prompt Section --}}
        <x-cards.blurred-card bgShadow class="rounded-full open:p-2.5 h-[48px] w-[48px] open:w-full loading:opacity-50">
            <div class="size-full flex justify-between gap-x-3">
                <button id="ai-toggle-btn" type="button"
                    class="shrink-0 min-w-full open:min-w-[32px] flex items-center justify-center cursor-pointer outline-none">
                    <svg class="size-[20px] fill-[#6366F1]" x="0px" y="0px" width="100" height="100"
                        viewBox="0 0 50 50">
                        <path
                            d="M49.04,24.001l-1.082-0.043h-0.001C36.134,23.492,26.508,13.866,26.042,2.043L25.999,0.96C25.978,0.424,25.537,0,25,0	s-0.978,0.424-0.999,0.96l-0.043,1.083C23.492,13.866,13.866,23.492,2.042,23.958L0.96,24.001C0.424,24.022,0,24.463,0,25	c0,0.537,0.424,0.978,0.961,0.999l1.082,0.042c11.823,0.467,21.449,10.093,21.915,21.916l0.043,1.083C24.022,49.576,24.463,50,25,50	s0.978-0.424,0.999-0.96l0.043-1.083c0.466-11.823,10.092-21.449,21.915-21.916l1.082-0.042C49.576,25.978,50,25.537,50,25	C50,24.463,49.576,24.022,49.04,24.001z">
                        </path>
                    </svg>
                    <div class="text-[18px] font-bold">/</div>
                </button>
                <input id="ai-prompt-input" type="text"
                    class="h-full w-0 open:w-full outline-none text-[13px] lg:text-[14px] pb-0.5"
                    placeholder="What is enoa?" />
                <button id="ai-submit-btn" type="submit"
                    class="opacity-0 open:opacity-100 w-[22px] cursor-pointer pointer-events-none open:pointer-events-auto loading:pointer-events-none">
                    <x-misc.material-icon class="loading:hidden duration-0 icon-send opacity-80" size="22px">
                    </x-misc.material-icon>
                    <x-misc.material-icon class="hidden loading:block duration-0 icon-circle animate-ping pr-[2px]"
                        size="16px">
                    </x-misc.material-icon>
                </button>
            </div>
        </x-cards.blurred-card>
    </div>
</form>
