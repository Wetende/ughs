@extends('layouts.guest')

@section('title', 'Mentorship Program - Uasin Gishu High School')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-[#22345b] mb-6">Mentorship Program</h1>

    <div class="prose max-w-none">
        <p class="text-lg mb-6">The UGHS Mentorship Program connects current students with alumni and industry professionals, creating valuable relationships that foster personal and professional growth.</p>

        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-[#22345b] mb-4">For Mentors</h2>
                <p class="mb-4">Share your experience and guide the next generation:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Career guidance and advice</li>
                    <li>Professional development support</li>
                    <li>Academic mentoring</li>
                    <li>Life skills coaching</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-[#22345b] mb-4">For Mentees</h2>
                <p class="mb-4">Benefit from experienced guidance:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Career path insights</li>
                    <li>Academic support</li>
                    <li>Professional networking</li>
                    <li>Personal development</li>
                </ul>
            </div>
        </div>

        <div class="bg-[#f5f5f5] p-8 rounded-lg mb-8">
            <h2 class="text-2xl font-semibold text-[#22345b] mb-4">Program Structure</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li>One-on-one mentoring sessions</li>
                <li>Group workshops and seminars</li>
                <li>Career development events</li>
                <li>Networking opportunities</li>
                <li>Regular progress tracking</li>
            </ul>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-[#22345b] mb-4">Get Involved</h2>
            <p class="mb-4">To join the mentorship program as a mentor or mentee, please contact:</p>
            <div class="space-y-2">
                <p><strong>Mentorship Program Coordinator</strong></p>
                <p>Email: mentorship@ughs.edu.ke</p>
                <p>Phone: +254 (0) 123 456 789</p>
            </div>
        </div>
    </div>
</div>
@endsection
