<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text-white text-lg font-bold ">Create new support Ticket </h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action={{ route('ticket.store') }} enctype="multipart/form-data">
                <div class="mt-4">
                    <x-input-label for="Title" :value="__('Title')" />

                    <x-text-input id="title" class="block mt-1 w-full"
                                    type="text"
                                    name="title"
                                    placeholder="Title"
                                     required autofocus/>

                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="Description" :value="__('Description')" />
                     <x-text-area id="description"  name="description" Placeholder='Description'/>

                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="Attachment" :value="__('Attachment')" />

                    <x-file-input name="attachment" id="attachment"/>

                    <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
                </div>



            </form>

        </div>

    </div>

</x-app-layout>
