@extends('layouts.app')

@section('options-section')
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-2xl">
          <div class="flex justify-between items-start mb-12">
            <div class="max-w-2xl">
              <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                Struggling to Grow on LinkedIn?
                <br />
                Here's What's Holding You Back
              </h2>
            </div>
            <Button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 font-semibold">
              Sign up for free →
            </Button>
          </div>

          <div class="grid md:grid-cols-2 gap-6">
            {/* Writer's Block */}
            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
              <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center flex-shrink-0">
                <FileText class="w-6 h-6 text-white" />
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Writer's Block</h3>
                <p class="text-gray-600">Create LinkedIn-ready posts effortlessly with AI and smart templates.</p>
              </div>
            </div>

            {/* Time Constraints */}
            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
              <div class="w-12 h-12 bg-gray-500 rounded-xl flex items-center justify-center flex-shrink-0">
                <Clock class="w-6 h-6 text-white" />
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Time Constraints</h3>
                <p class="text-gray-600">Schedule posts, videos and carousels effortlessly to save time.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
              <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center flex-shrink-0">
                <div class="w-6 h-6 text-white">💡</div>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Scattered Ideas</h3>
                <p class="text-gray-600">Save and organize inspirations with swipe files.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
              <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center flex-shrink-0">
                <div class="flex space-x-1">
                  <div class="w-1 h-4 bg-white rounded"></div>
                  <div class="w-1 h-4 bg-white rounded"></div>
                  <div class="w-1 h-4 bg-white rounded"></div>
                </div>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Carousel Challenges</h3>
                <p class="text-gray-600">Design professional carousels quickly using pre-built templates.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
              <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                <FileText class="w-6 h-6 text-white" />
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Content Uncertainty</h3>
                <p class="text-gray-600">Generate tailored content aligned with your style and audience.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
              <div class="w-12 h-12 bg-red-500 rounded-xl flex items-center justify-center flex-shrink-0">
                <div class="w-6 h-6 text-white">💼</div>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Missed Opportunities</h3>
                <p class="text-gray-600">Stay on top of engagement with a custom feed & list.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
              <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center flex-shrink-0">
                <div class="flex space-x-1 items-end">
                  <div class="w-1 h-2 bg-white rounded"></div>
                  <div class="w-1 h-4 bg-white rounded"></div>
                  <div class="w-1 h-3 bg-white rounded"></div>
                </div>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Inconsistent Branding</h3>
                <p class="text-gray-600">Create posts that match your unique tone, not generic AI.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
              <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center flex-shrink-0">
                <RotateCcw class="w-6 h-6 text-white" />
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Inefficiency</h3>
                <p class="text-gray-600">Replace multiple tools with a single all-in-one platform.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
              <div class="w-12 h-12 bg-teal-500 rounded-xl flex items-center justify-center flex-shrink-0">
                <div class="flex space-x-1 items-end">
                  <div class="w-1 h-2 bg-white rounded"></div>
                  <div class="w-1 h-4 bg-white rounded"></div>
                  <div class="w-1 h-3 bg-white rounded"></div>
                  <div class="w-1 h-5 bg-white rounded"></div>
                </div>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Analytics</h3>
                <p class="text-gray-600">Track, analyze, and optimize your LinkedIn efforts</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
              <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                <div class="w-6 h-6 text-white">◆</div>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">AI Assistant</h3>
                <p class="text-gray-600">Generate ideas, refine drafts, and create content with ease.</p>
              </div>
            </div>
          </div>
        </div>
    </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="text-center">
          <div class="inline-flex items-center space-x-3 bg-white rounded-full px-6 py-3 shadow-lg">
            <span class="text-2xl font-bold text-gray-900">Discover</span>
            <div class="flex items-center space-x-2">
              <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                <div class="w-4 h-4 bg-white rounded-sm transform rotate-45"></div>
              </div>
              <span class="text-xl font-bold text-gray-900">Supergrow</span>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection