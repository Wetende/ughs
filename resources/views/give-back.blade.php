@extends('layouts.guest')

@section('title', 'Give Back - Uasin Gishu High School')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-[#22345b] mb-6">Give Back to UGHS</h1>

    <div class="prose max-w-none">
        <p class="text-lg mb-6">Your support helps shape the future of Uasin Gishu High School and its students. There are many ways to give back and make a difference:</p>

        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-[#22345b] mb-4">Financial Support</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Scholarship Funds</li>
                    <li>Infrastructure Development</li>
                    <li>Educational Resources</li>
                    <li>Sports Facilities</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-[#22345b] mb-4">Time & Expertise</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Guest Speaking</li>
                    <li>Career Guidance</li>
                    <li>Mentorship Programs</li>
                    <li>Skills Training</li>
                </ul>
            </div>
        </div>

        <div class="bg-[#f5f5f5] p-8 rounded-lg mb-8">
            <h2 class="text-2xl font-semibold text-[#22345b] mb-4">Why Give?</h2>
            <p class="mb-4">Your contribution to UGHS helps:</p>
            <ul class="list-disc pl-6 space-y-2">
                <li>Provide quality education to deserving students</li>
                <li>Improve school facilities and infrastructure</li>
                <li>Support extracurricular activities and programs</li>
                <li>Create opportunities for underprivileged students</li>
            </ul>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-[#22345b] mb-4">How to Contribute</h2>
            <p class="mb-4">To make a contribution or discuss ways to give back, please contact:</p>
            <div class="space-y-2">
                <p><strong>Development Office</strong></p>
                <p>Email: development@ughs.edu.ke</p>
                <p>Phone: +254 (0) 123 456 789</p>
            </div>
        </div>
    </div>
</div>
@endsection
