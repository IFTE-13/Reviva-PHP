<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Repairing Features</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .feature-icon {
            width: 3rem;
            height: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid;
            color: #ea580c; /* orange 600 */
            border-radius: 0.5rem; /* rounded-lg */
        }
    </style>
</head>
<body class="text-gray-600">

<section class="py-14">
    <div class="container mx-auto px-4 text-gray-600 md:px-8">
        <div class="max-w-xl space-y-3">
            <h3 class="text-orange-600 font-semibold">Features</h3>
            <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">Everything you need to keep your PC running smoothly</p>
            <p>Our comprehensive PC repair services ensure that your computer is running at its best. From hardware repairs to software optimization, we've got you covered.</p>
        </div>
        <div class="mt-12">
            <ul class="grid gap-y-8 gap-x-12 sm:grid-cols-2 lg:grid-cols-3" id="features-list">
                <!-- Features will be inserted here by JavaScript -->
            </ul>
        </div>
    </div>
</section>

<script>
    const features = [
        {
            title: 'Hardware Repairs',
            desc: 'Expert hardware repairs for all types of PCs. From replacing broken screens to fixing motherboard issues, we handle it all.'
        },
        {
            title: 'Virus Removal',
            desc: 'Thorough virus and malware removal to protect your data and keep your PC running smoothly.'
        },
        {
            title: 'Data Recovery',
            desc: 'Lost important files? Our data recovery services can help retrieve your lost or corrupted data.'
        },
        {
            title: 'System Optimization',
            desc: 'Improve your PC\'s performance with our system optimization services, including software updates and speed enhancements.'
        },
        {
            title: 'Custom PC Builds',
            desc: 'Looking for a custom PC? We build PCs tailored to your specific needs, whether for gaming, work, or general use.'
        },
        {
            title: 'Remote Support',
            desc: 'Get quick solutions to software issues with our remote support services, available at your convenience.'
        },
    ];

    const featuresList = document.getElementById('features-list');

    features.forEach(feature => {
        const featureItem = document.createElement('li');
        featureItem.className = 'space-y-3';

        featureItem.innerHTML = `
            <div class="feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
            </div>
            <h4 class="text-lg text-gray-800 font-semibold">${feature.title}</h4>
            <p>${feature.desc}</p>
        `;

        featuresList.appendChild(featureItem);
    });
</script>

</body>
</html>
