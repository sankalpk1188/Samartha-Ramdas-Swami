<?php

namespace App\Http\Controllers;

use App\Models\DetailPage;
use App\Models\Literature;
use App\Models\Author;
use Illuminate\Http\Request;
use Image;

class DetailPageController extends Controller
{
    
        public function addDetailPage(Request $request)
        {
            if ($request->isMethod('post')) {
                $data = $request->all();             
                $detailPage = new DetailPage;
                $detailPage->author_id = $data['author_id'] ?? null;
                $detailPage->literature_id = $data['literature_id'] ?? null;
                if ($request->hasFile('pdf_file')) {
                    $pdfFile = $request->file('pdf_file');
                    if ($pdfFile->isValid()) {
                        $pdfFilename = time() . '.' . $pdfFile->getClientOriginalExtension();  
                        $pdfPath = 'assets/pdfs/detailpage/' . $pdfFilename;
                         $pdfFile->move($pdfPath, $pdfFilename);
                        $detailPage->pdf_file= $pdfFilename;
                    }
                }
                $detailPage->save();
                return redirect('admin/view-detailpage')->with('flash_message_success', 'New record added successfully');
            }
            $authors = Author::all();
            $literatures = Literature::all();
            return view('admin.detailpage.add-detailpage', compact('authors', 'literatures'));
        }

public function editDetailPage(Request $request, $id)
{
    $detailPage = DetailPage::findOrFail($id);
    if ($request->isMethod('post')) {
        $data = $request->all();
        $detailPage->author_id = $data['author_id'] ?? null;
        $detailPage->literature_id = $data['literature_id'] ?? null;
        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            if ($pdfFile->isValid()) {
                $oldPdfPath = public_path('assets/pdfs/detailpage/' . $detailPage->pdf_file);
                if (file_exists($oldPdfPath) && $detailPage->pdf_file) {
                    unlink($oldPdfPath);
                }
                $pdfFilename = time() . '.' . $pdfFile->getClientOriginalExtension();
                $pdfFile->move(public_path('assets/pdfs/detailpage'), $pdfFilename);
                $detailPage->pdf_file = $pdfFilename;
            }
        }
        $detailPage->save();
        return redirect('admin/view-detailpage')->with('flash_message_success', 'Record updated successfully.');
    }
    $authors = Author::all();
    $literatures = Literature::all();
    return view('admin.detailpage.edit-detailpage', compact('detailPage', 'authors', 'literatures'));
}

    public function viewDetailPage()
{
    
    $detailpages = DetailPage::with(['author', 'literature'])
        ->orderBy('id', 'ASC')
        ->paginate(5);
    return view('admin.detailpage.view-detailpage', compact('detailpages'));
}


    public function deleteDetailpage(Request $request, $id){
        DetailPage::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Data deleted successfully');
    }
}