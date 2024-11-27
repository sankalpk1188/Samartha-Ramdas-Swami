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
            $detailPage->mr_author_id = $data['mr_author_id'] ?? null;
            $detailPage->hi_author_id = $data['hi_author_id'] ?? null;
            $detailPage->en_author_id = $data['en_author_id'] ?? null;
            $detailPage->mr_literature_id = $data['mr_literature_id'] ?? null;
            $detailPage->hi_literature_id = $data['hi_literature_id'] ?? null;
            $detailPage->en_literature_id = $data['en_literature_id'] ?? null;

            if ($request->hasFile('mr_pdf_file')) {
                $pdfFile = $request->file('mr_pdf_file');
                if ($pdfFile->isValid()) {
                    $pdfFilename = time() . '.' . $pdfFile->getClientOriginalExtension();
                    $pdfPath = 'assets/pdfs/detailpage/' . $pdfFilename;
                    $pdfFile->move($pdfPath, $pdfFilename);
                    $detailPage->mr_pdf_file = $pdfFilename;
                }
            }
            if ($request->hasFile('hi_pdf_file')) {
                $pdfFile = $request->file('hi_pdf_file');
                if ($pdfFile->isValid()) {
                    $pdfFilename = time() . '.' . $pdfFile->getClientOriginalExtension();
                    $pdfPath = 'assets/pdfs/detailpage/' . $pdfFilename;
                    $pdfFile->move($pdfPath, $pdfFilename);
                    $detailPage->hi_pdf_file = $pdfFilename;
                }
            }
            if ($request->hasFile('en_pdf_file')) {
                $pdfFile = $request->file('en_pdf_file');
                if ($pdfFile->isValid()) {
                    $pdfFilename = time() . '.' . $pdfFile->getClientOriginalExtension();
                    $pdfPath = 'assets/pdfs/detailpage/' . $pdfFilename;
                    $pdfFile->move($pdfPath, $pdfFilename);
                    $detailPage->en_pdf_file = $pdfFilename;
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
            $detailPage->mr_author_id = $data['mr_author_id'] ?? null;
            $detailPage->hi_author_id = $data['hi_author_id'] ?? null;
            $detailPage->en_author_id = $data['en_author_id'] ?? null;
            $detailPage->mr_literature_id = $data['mr_literature_id'] ?? null;
            $detailPage->hi_literature_id = $data['hi_literature_id'] ?? null;
            $detailPage->en_literature_id = $data['en_literature_id'] ?? null;
    
           
            if ($request->hasFile('mr_pdf_file')) {
                $pdfFile = $request->file('mr_pdf_file');
                if ($pdfFile->isValid()) {
                   
                    $oldPdfPath = public_path('assets/pdfs/detailpage/' . $detailPage->mr_pdf_file);
                    if (file_exists($oldPdfPath) && $detailPage->mr_pdf_file) {
                        unlink($oldPdfPath);
                    }
                    $pdfFilename = time() . '.' . $pdfFile->getClientOriginalExtension();
                    $pdfFile->move(public_path('assets/pdfs/detailpage'), $pdfFilename);
                    $detailPage->mr_pdf_file = $pdfFilename;
                }
            }
  
            if ($request->hasFile('hi_pdf_file')) {
                $pdfFile = $request->file('hi_pdf_file');
                if ($pdfFile->isValid()) {
                    
                    $oldPdfPath = public_path('assets/pdfs/detailpage/' . $detailPage->hi_pdf_file);
                    if (file_exists($oldPdfPath) && $detailPage->hi_pdf_file) {
                        unlink($oldPdfPath);
                    }
                    $pdfFilename = time() . '.' . $pdfFile->getClientOriginalExtension();
                    $pdfFile->move(public_path('assets/pdfs/detailpage'), $pdfFilename);
                    $detailPage->hi_pdf_file = $pdfFilename;
                }
            }
             
            if ($request->hasFile('en_pdf_file')) {
                $pdfFile = $request->file('en_pdf_file');
                if ($pdfFile->isValid()) {
                    
                    $oldPdfPath = public_path('assets/pdfs/detailpage/' . $detailPage->en_pdf_file);
                    if (file_exists($oldPdfPath) && $detailPage->en_pdf_file) {
                        unlink($oldPdfPath);
                    }
                    $pdfFilename = time() . '.' . $pdfFile->getClientOriginalExtension();
                    $pdfFile->move(public_path('assets/pdfs/detailpage'), $pdfFilename);
                    $detailPage->en_pdf_file = $pdfFilename;
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
        $detailpages = DetailPage::with(['mr_author', 'hi_author', 'en_author', 'mr_literature', 'hi_literature', 'en_literature'])->paginate(10);
        return view('admin.detailpage.view-detailpage', compact('detailpages'));
    }


    public function deleteDetailpage(Request $request, $id)
    {
        DetailPage::where('id', $id)->delete();
        return redirect()->back()->with('flash_message_success', 'Data deleted successfully');
    }
}