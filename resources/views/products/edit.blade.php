<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="relative overflow-x-auto">

                        <form class="max-w-sm mx-auto" method="POST"
                            action="{{ route('products.update', $product->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-5">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Producto
                                </label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Digite el nombre del producto"
                                    value="{{ old('name', $product->name) }}" required />
                                @if ($errors->has('name'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $errors->first('name') }}
                                    </p>
                                @endif
                            </div>
                            <div class="mb-5 mt-3">
                                <label for="quantity"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad
                                </label>
                                <input type="number" name="quantity" id="quantity"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ old('quantity', $product->quantity) }}" required />
                                @if ($errors->has('quantity'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $errors->first('quantity') }}
                                    </p>
                                @endif
                            </div>
                            <div class="mb-5 mt-3">
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio
                                </label>
                                <input type="number" name="price" id="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ old('price', $product->price) }}" required />
                                @if ($errors->has('price'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $errors->first('price') }}
                                    </p>
                                @endif
                            </div>
                            <div class="mb-5 mt-3">
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion
                                </label>
                                <input type="text" name="description" id="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ old('description', $product->description) }}" />
                                @if ($errors->has('description'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $errors->first('description') }}
                                    </p>
                                @endif
                            </div>
                            <button type="submit"
                                class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
