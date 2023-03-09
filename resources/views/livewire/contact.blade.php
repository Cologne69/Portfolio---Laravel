<div>

    {{-- <div>
            HI

        </div>
        <div class="divider lg:divider-horizontal"></div>
        <div class="divider divider-horizontal">OH</div>
        <div>

            HI2
        </div> --}}
    <div class="columns-2 ">
        <div class="h-fit card bg-base-300 rounded-box place-items-center">

        </div>
        <div class="h-fit card bg-base-300 rounded-box place-items-center animate__animated animate__fadeInUp">
            <form wire:submit.prevent="submitForm">
                <div class="grid gap-4">
                    <div>
                        <input label="{{ __('Name') }}" model="name" required />
                    </div>
                    <div>
                        <input type="email" label="{{ __('Email') }}" model="email" required />
                    </div>
                    <div>
                        <textarea label="{{ __('Message') }}" model="message" required></textarea>
                    </div>
                    <div>
                        <button type="submit">{{ __('Submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
