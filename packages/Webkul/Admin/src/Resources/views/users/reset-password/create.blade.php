<x-admin::layouts.anonymous>
    <!-- Page Title -->
    <x-slot:title>
        @lang('admin::app.users.reset-password.title')
    </x-slot>

    <div class="flex justify-center items-center h-[100vh]">
        <div class="flex flex-col gap-5 items-center">
            <!-- Logo -->
            @if ($logo = core()->getConfigData('general.design.admin_logo.logo_image'))
                <img
                    class="w-[110px] h-10"
                    src="{{ Storage::url($logo) }}"
                    alt="{{ config('app.name') }}"
                />
            @else
                <img
                    class="w-max"
                    src="{{ unopim_asset('images/logo.svg') }}"
                    alt="{{ config('app.name') }}"
                />
            @endif

            <div class="flex flex-col min-w-[300px] bg-white dark:bg-cherry-800 rounded-md box-shadow">
                <!-- Login Form -->
                <x-admin::form :action="route('admin.reset_password.store')">
                    <div class="p-4">
                        <p class="text-xl text-gray-800 dark:text-slate-50 font-bold">
                            @lang('admin::app.users.reset-password.title')
                        </p>
                    </div>

                    <x-admin::form.control-group.control
                        type="hidden"
                        name="token"
                        :value="$token"
                    />

                    <div class="p-4 border-y dark:border-gray-800">
                        <!-- Email -->
                        <x-admin::form.control-group>
                            <x-admin::form.control-group.label class="required">
                                @lang('admin::app.users.reset-password.email')
                            </x-admin::form.control-group.label>

                            <x-admin::form.control-group.control
                                type="email"
                                class="w-[254px] max-w-full"
                                id="email"
                                name="email"
                                rules="required|email"
                                :label="trans('admin::app.users.reset-password.email')"
                                :placeholder="trans('admin::app.users.reset-password.email')"
                            />

                            <x-admin::form.control-group.error control-name="email" />
                        </x-admin::form.control-group>

                        <!-- Password -->
                        <x-admin::form.control-group>
                            <x-admin::form.control-group.label class="required">
                                @lang('admin::app.users.reset-password.password')
                            </x-admin::form.control-group.label>

                            <x-admin::form.control-group.control
                                type="password"
                                class="w-[254px] max-w-full"
                                id="password"
                                name="password"
                                rules="required|min:6"
                                :label="trans('admin::app.users.reset-password.password')"
                                :placeholder="trans('admin::app.users.reset-password.password')"
                                ref="password"
                            />

                            <x-admin::form.control-group.error control-name="password" />
                        </x-admin::form.control-group>

                        <!-- Confirm Password -->
                        <x-admin::form.control-group>
                            <x-admin::form.control-group.label class="required">
                                @lang('admin::app.users.reset-password.confirm-password')
                            </x-admin::form.control-group.label>

                            <x-admin::form.control-group.control
                                type="password"
                                class="w-[254px] max-w-full"
                                id="password_confirmation"
                                name="password_confirmation"
                                rules="confirmed:@password"
                                :label="trans('admin::app.users.reset-password.confirm-password')"
                                :placeholder="trans('admin::app.users.reset-password.confirm-password')"
                                ref="password"
                            />

                            <x-admin::form.control-group.error control-name="password_confirmation" />
                        </x-admin::form.control-group>
                    </div>

                    <div class="flex justify-between items-center p-4">
                        <!-- Back Button-->
                        <a
                            class="text-xs text-violet-700 font-semibold leading-6 cursor-pointer"
                            href="{{ route('admin.session.create') }}"
                        >
                            @lang('admin::app.users.reset-password.back-link-title')
                        </a>

                        <!-- Submit Button -->
                        <button
                            class="primary-button">
                            @lang('admin::app.users.reset-password.submit-btn')
                        </button>
                    </div>
                </x-admin::form>
            </div>

            <!-- Powered By -->
            <div class="absolute bottom-6 inset-x-0 text-xs text-gray-800 dark:text-white font-medium flex flex-col items-center">
                <div>
                    @lang('admin::app.users.reset-password.powered-by', [
                        'unopim' => '<a class="text-violet-700 hover:underline" href="https://unopim.com/" target="_blank">Unopim</a>'
                    ])
                </div>
                <div>
                    <div class="text-xs text-gray-800 dark:text-white font-medium">
                        @lang('admin::app.users.reset-password.open-source-project-by', [
                            'webkul' => '<a class="text-violet-700 hover:underline" href="https://webkul.com/" target="_blank">Webkul</a>',
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin::layouts.anonymous>
