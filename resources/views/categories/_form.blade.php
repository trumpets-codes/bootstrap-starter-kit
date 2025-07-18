<x-modal id="categoryModal" title="Create Category">
    <x-form id="categoryForm">
        <x-modal.body class="space-y-3">
            <input type="hidden" name="id" />
            <x-input name="name" label="Name" placeholder="Enter name"/>
            <x-textarea name="description" label="Description" placeholder="Enter description"/>
        </x-modal.body>

        <x-modal.footer>
            <x-button color="secondary" data-bs-dismiss="modal">Cancel</x-button>
            <x-button color="dark" type="submit">Submit</x-button>
        </x-modal.footer>
    </x-form>
</x-modal>
