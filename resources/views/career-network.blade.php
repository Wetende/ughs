@extends('layouts.guest')

@section('title', 'Career Network - Uasin Gishu High School')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-[#22345b] mb-6">Career Network</h1>

    <div class="prose max-w-none">
        <p class="text-lg mb-6">The UGHS Career Network connects students, alumni, and professionals, creating opportunities for career development, networking, and professional growth.</p>

        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-[#22345b] mb-4">Network Benefits</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Job and internship opportunities</li>
                    <li>Professional networking events</li>
                    <li>Industry insights and trends</li>
                    <li>Career development resources</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-[#22345b] mb-4">For Employers</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Access to talented graduates</li>
                    <li>Internship program support</li>
                    <li>Recruitment opportunities</li>
                    <li>Industry partnerships</li>
                </ul>
            </div>
        </div>

        <div class="bg-[#f5f5f5] p-8 rounded-lg mb-8">
            <h2 class="text-2xl font-semibold text-[#22345b] mb-4">Network Activities</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li>Career fairs and job expos</li>
                <li>Industry-specific workshops</li>
                <li>Professional development seminars</li>
                <li>Networking events</li>
                <li>Online job board and resources</li>
            </ul>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-[#22345b] mb-4">Join the Network</h2>
            <p class="mb-4">To join the UGHS Career Network or learn more about our programs, contact:</p>
            <div class="space-y-2">
                <p><strong>Career Services Office</strong></p>
                <p>Email: careers@ughs.edu.ke</p>
                <p>Phone: +254 (0) 123 456 789</p>
            </div>
        </div>
    </div>
</div>
@endsection
