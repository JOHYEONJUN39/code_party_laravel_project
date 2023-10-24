<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          신규작성
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <section class="text-gray-600 body-font relative">
                  <form action="{{ route('groups.store') }}" method="post">
                    @csrf
                    <div class="container px-5 mx-auto">
                      <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <div class="-m-2">
                          <div class="p-2 w-full">
                            <div class="relative">
                              <label for="id" class="leading-7 text-sm text-gray-600">학번</label>
                              <input type="text" id="id" name="id" value="{{ old('id') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>

                          <div class="p-2 w-full">
                            <div class="relative">
                              <label for="name" class="leading-7 text-sm text-gray-600">이름</label>
                              <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          
                          <div class="p-2 w-full">
                            <div class="relative">
                              <label class="leading-7 text-sm text-gray-600">성별</label>
                              <br>
                              <input type="radio" name="gender" value="0" {{ old('gender') == 0 ? 'checked' : '' }} >남성
                              <input type="radio" name="gender" value="1" {{ old('gender') == 1 ? 'checked' : '' }}>여성
                            </div>
                          </div>

                          <div class="p-2 w-full">
                            <div class="relative">
                              <label for="email" class="leading-7 text-sm text-gray-600">이메일</label>
                              <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          
                          <div class="p-2 w-full">
                            <div class="relative">
                              <label for="age" class="leading-7 text-sm text-gray-600">연령</label>
                              <input type="text" id="age" name="age" value="{{ old('age') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>

                          <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">신규등록</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </section>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>