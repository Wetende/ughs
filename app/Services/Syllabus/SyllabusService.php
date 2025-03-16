<?php

namespace App\Services\Syllabus;

use App\Models\Syllabus;
use Illuminate\Support\Facades\Storage;

class SyllabusService
{
    public function getAllSyllabi()
    {
        return Syllabus::where('school_id', auth()->user()->school_id)->get();
    }

    //get all syllabus in term and class
    public function getAllSyllabiInTermAndClass($term_id, $class_id)
    {
        return Syllabus::where('term_id', $term_id)->get()->load('subject', 'subject.myClass')->filter(function ($term) use ($class_id) {
            return $term->subject->myClass->id == $class_id;
        });
    }

    public function getSyllabusById($id)
    {
        return Syllabus::find($id);
    }

    public function createSyllabus($data)
    {
        $data['term_id'] = auth()->user()->school->term_id;

        $data['file'] = $data['file']->store(
            'syllabus/',
            'public'
        );

        Syllabus::create([
            'name'        => $data['name'],
            'description' => $data['description'],
            'file'        => $data['file'],
            'subject_id'  => $data['subject_id'],
            'term_id'     => $data['term_id'],
        ]);
    }

    public function updateSyllabus($id, $data)
    {
        return Syllabus::find($id)->update($data);
    }

    public function deleteSyllabus(Syllabus $syllabus)
    {
        Storage::disk('public')->delete($syllabus->file);
        $syllabus->delete();
    }
}
