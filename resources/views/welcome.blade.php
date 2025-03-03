<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark h-full bg-white">
<head>
    @include('partials.head')
    <!-- Include PDF.js from a CDN (or use your local build) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js" defer></script>
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
<div class="flex">
    <flux:sidebar sticky stashable class="lg:w-164 bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
        <!-- Sidebar navlist code … -->
    </flux:sidebar>

    <flux:main class="!w-1/2">
        <flux:heading size="xl" level="1">Hello World</flux:heading>
        <!-- Container for the PDF -->
        <div id="pdf-container" class="w-full h-full border border-gray-300">
            {{-- <!-- PDF.js will render the PDF here --> --}}
        </div>
    </flux:main>
</div>

@fluxScripts

<!-- Initialize PDF.js after the page loads -->
<script defer>
document.addEventListener('DOMContentLoaded', function () {
    // Path to your PDF file (update as needed)
    const url = '/path/to/your.pdf';

    // Ensure the PDF.js worker is set up
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

    // Get the container element
    const container = document.getElementById('pdf-container');

    // Load the PDF document
    pdfjsLib.getDocument(url).promise.then(pdf => {
        // For demonstration, render only the first page
        pdf.getPage(1).then(page => {
            // Adjust scale for desired size
            const scale = 1.5;
            const viewport = page.getViewport({ scale: scale });

            // Create a canvas element and set dimensions
            const canvas = document.createElement('canvas');
            canvas.width = viewport.width;
            canvas.height = viewport.height;
            container.appendChild(canvas);

            // Render the page into the canvas
            const context = canvas.getContext('2d');
            const renderContext = {
                canvasContext: context,
                viewport: viewport
            };
            page.render(renderContext);
        });
    }).catch(error => {
        console.error('Error loading PDF:', error);
        container.innerHTML = '<p class="text-red-500">Failed to load PDF.</p>';
    });
});
</script>
</body>
</html>
