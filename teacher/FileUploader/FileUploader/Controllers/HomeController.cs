using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.IO;
using FileUploader.Models;
using Microsoft.Office.Core;
using Microsoft.Office.Interop.PowerPoint;
using DMSClassLibrary;

namespace FileUploader.Controllers
{
    public class HomeController : Controller
    {
        //
        // GET: /Home/

        public ActionResult FileUploader()
        {

            return View();
        }



        [HttpPost]
        public ActionResult FileUploader(FileUploaderModel upload)
        {
            string guid = Guid.NewGuid().ToString();
            //upload.guid = guid;

            string msg = "Something went wrong, Your file was not uploaded.";

            HttpPostedFileBase file = Request.Files[0];
            string FinalPath = "";
            if (file != null && file.ContentLength > 0)
            {
                var fileName = Path.GetFileName(file.FileName);             // extract only the fielname
                var ext = Path.GetExtension(fileName.ToLower());            //extract only the extension of filename and then convert it into lower case.

                //var fileNameWithoutExt = Path.GetFileNameWithoutExtension(fileName);
                var path = Server.MapPath("~/UploadBooks/Attachments/" + guid + ext);
                file.SaveAs(path);

                if (ext == ".txt")                          //If the file is a "text" file.
                {
                    string filePath = "";
                    string filePath12 = "";
                    filePath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ext);
                    filePath12 = Server.MapPath("~/UploadBooks/Attachments/");
                    FinalPath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ".pdf");

                    TextPDF.PdfWriter pdfWriter = new TextPDF.PdfWriter(842.0f, 1190.0f, 10.0f, 10.0f);
                    pdfWriter.Getfilename(guid, filePath12);      //Convert the "txt" file into "pdf" file
                    if (filePath.Length > 0)
                        pdfWriter.Write(filePath);                              //Store the converted pdf file into Attachments folder

                    upload.ConvertSingleImage(FinalPath);               //Convert the pdf file into "jpg" file, the code is written in FileUploaderModel.cs
                    string str = "../../UploadBooks/Attachments/Preview/" + guid + ".jpg";
                    return Content(str);
                }

                //If the file is a "Word Document" file.
                else if (ext == ".doc" || ext == ".docx" || ext == ".rtf")
                {
                    string inputFilePath = ""; string outputFilePath = "";

                    inputFilePath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ext);
                    outputFilePath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ".pdf");
                    FinalPath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ".pdf");

                    upload.ExportWordFileToPdf(inputFilePath, outputFilePath);
                    upload.ConvertSingleImage(FinalPath);
                    string str = "../../UploadBooks/Attachments/Preview/" + guid + ".jpg";
                    return Content(str);
                }

                //If the file is a "Excel" file.
                else if (ext == ".xls" || ext == ".xlsx")
                {
                    string inputFilePath = ""; string outputFilePath = "";
                    inputFilePath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ext);
                    outputFilePath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ".pdf");
                    FinalPath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ".pdf");
                    upload.ExportWorkbookToPdf(inputFilePath, outputFilePath);      //Convert the Excel file into "pdf" file
                    upload.ConvertSingleImage(FinalPath);                //Convert the pdf file into "jpg" file, the code is written in FileUploaderModel.cs
                    string str = "../../UploadBooks/Attachments/Preview/" + guid + ".jpg";
                    return Content(str);
                }

                //If the file is a "Power Point" file.
                else if (ext == ".ppt" || ext == ".pptx")
                {
                    string inputFilePath = "";
                    inputFilePath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ext);
                    //outputFilePath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ".pdf");
                    FinalPath = Server.MapPath("~/UploadBooks/Attachments/Preview" + guid + ".jpg");
                    string ExportLocation = Server.MapPath("~/UploadBooks/Attachments/Preview/");
                    Microsoft.Office.Interop.PowerPoint.Application ppApp = new Microsoft.Office.Interop.PowerPoint.Application();
                    //ppApp.Visible = MsoTriState.msoTrue;               //To open the ppt file.
                    //ppApp.WindowState = PpWindowState.ppWindowMinimized;         //To minimise the opened ppt file.
                    Microsoft.Office.Interop.PowerPoint.Presentations oPresSet = ppApp.Presentations;
                    Microsoft.Office.Interop.PowerPoint._Presentation oPres = oPresSet.Open(inputFilePath,
                                MsoTriState.msoFalse, MsoTriState.msoFalse,
                                MsoTriState.msoFalse);
                    ppApp.ShowWindowsInTaskbar = MsoTriState.msoFalse;  //Hiding the application; But it will be displayed always
                    try
                    {
                        Slides objSlides = oPres.Slides;    //Getting all the slides
                        for (int i = 1; i < 2; i++)    //If you want to convert all the slides into jpg then use "i < objSlides-1" in for loop.
                        {
                            string files = Path.Combine(ExportLocation, string.Format("{0}.{1}", guid, "jpg"));
                            oPres.Slides[i].Export(files, "jpg", 800, 600);
                        }
                    }
                    finally
                    {
                        ppApp.Quit();   //Closing the Powerpoint application. Sometimes it won't work too.
                    }
                    string str = "../../UploadBooks/Attachments/Preview/" + guid + ".jpg";
                    return Content(str);
                }

               //If the file is a "PDF" file.
                else if (ext == ".pdf")
                {
                    FinalPath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ext);
                    upload.ConvertSingleImage(FinalPath);           //Convert the pdf file into "jpg" file, the code is written in FileUploaderModel.cs
                    string str = "../../UploadBooks/Attachments/Preview/" + guid + ".jpg";
                    return Content(str);
                }

                //If the file is a "HTML" file.
                else if (ext == ".htm" || ext == ".html")
                {
                    string inputFilePath = ""; string outputFilePath = "";

                    inputFilePath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ext);
                    outputFilePath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ".pdf");
                    FinalPath = Server.MapPath("~/UploadBooks/Attachments/" + guid + ".pdf");

                    Html2PDF.Convert(inputFilePath, outputFilePath);    //Convert the html file into "pdf" file using Html2PDF.cs

                    upload.ConvertSingleImage(FinalPath);   //Convert the pdf file into "jpg" file, the code is written in FileUploaderModel.cs
                    string str = "../../UploadBooks/Attachments/Preview/" + guid + ".jpg";
                    return Content(str);
                }


                //If the file is a "image" file.
                else if (ext == ".jpg" || ext == ".jpeg" || ext == ".png" || ext == ".gif")
                {
                    file.SaveAs(Path.Combine(Server.MapPath("~/UploadBooks/Attachments/Preview/"), guid + ext));
                    string str = "../../UploadBooks/Attachments/Preview/" + guid + ext;
                    return Content(str);
                }
                string default_file = "../../Content/default.jpg";
                return Content(default_file);
            }

            else if (file == null && file.ContentLength == 0)
            {
                return Content(msg);
            }

            return Content(msg);
        }
    }
}
