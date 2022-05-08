using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.IO;
using Microsoft.Office.Interop.Word;


namespace FileUploader.Models
{
    public class FileUploaderModel
    {
        //public string guid { get; set; }

        PdfToImage.PDFConvert PdfConverter = new PdfToImage.PDFConvert();
        //Convert the pdf into Single Image.
        public void ConvertSingleImage(string filename)
        {
            try
            {
                PdfConverter.RenderingThreads = 5;
                PdfConverter.TextAlphaBit = 4;
                PdfConverter.OutputToMultipleFile = false;
                PdfConverter.FirstPageToConvert = -1;
                PdfConverter.LastPageToConvert = -1;
                PdfConverter.FitPage = false;
                PdfConverter.JPEGQuality = 10;
                PdfConverter.OutputFormat = "jpeg";
                System.IO.FileInfo input = new FileInfo(filename);

                string[] str = input.Name.Split('.');
                string output = string.Format("{0}\\{1}{2}", input.Directory + "\\Preview", str[0].ToString(), ".jpg");

                while (System.IO.File.Exists(output))
                {
                    File.Delete(output);
                    output = string.Format("{0}\\{1}{2}", input.Directory + "\\Preview", str[0].ToString(), ".jpg");
                }
                PdfConverter.Convert(input.FullName, output);
            }
            catch (Exception ex)
            {
            }
            return;
        }

        //Method to convert the Excel file into Pdf
        public bool ExportWorkbookToPdf(string workbookPath, string outputPath)
        {
            // If either required string is null or empty, stop and bail out
            if (string.IsNullOrEmpty(workbookPath) || string.IsNullOrEmpty(outputPath))
            {
                return false;
            }
            // Create COM Objects
            Microsoft.Office.Interop.Excel.Application excelApplication;
            Microsoft.Office.Interop.Excel.Workbook excelWorkbook;

            excelApplication = new Microsoft.Office.Interop.Excel.Application();        // Create new instance of Excel
            excelApplication.ScreenUpdating = false;                                    // Make the process invisible to the user
            excelApplication.DisplayAlerts = false;                                     // Make the process silent
            excelWorkbook = excelApplication.Workbooks.Open(workbookPath);          // Open the workbook that you wish to export to PDF
            // If the workbook failed to open, stop, clean up, and bail out
            if (excelWorkbook == null)
            {
                excelApplication.Quit();
                excelApplication = null;
                excelWorkbook = null;
                return false;
            }
            var exportSuccessful = true;
            try
            {
                // Call Excel's native export function (valid in Office 2007 and Office 2010, AFAIK)
                excelWorkbook.ExportAsFixedFormat(Microsoft.Office.Interop.Excel.XlFixedFormatType.xlTypePDF, outputPath);
            }
            catch (System.Exception ex)
            {
                // Mark the export as failed for the return value...
                exportSuccessful = false;
                // Do something with any exceptions here, if you wish...
                // MessageBox.Show...        
            }
            finally
            {
                // Close the workbook, quit the Excel, and clean up regardless of the results...
                excelWorkbook.Close();
                excelApplication.Quit();
                excelApplication = null;
                excelWorkbook = null;
            }
            return exportSuccessful;
        }


        public Microsoft.Office.Interop.Word.Document wordDocument { get; set; }
        public bool ExportWordFileToPdf(string workbookPath, string outputPath)
        {
            Microsoft.Office.Interop.Word.Application appWord = new Microsoft.Office.Interop.Word.Application();
            wordDocument = appWord.Documents.Open(workbookPath);
            var exportSuccessful = true;
            try
            {
                wordDocument.ExportAsFixedFormat(outputPath, WdExportFormat.wdExportFormatPDF);
            }
            catch (System.Exception ex)
            {
                exportSuccessful = false;
            }
            finally
            {
                ((_Document)wordDocument).Close();
                ((_Application)appWord).Quit();
                appWord = null;
                wordDocument = null;
            }
            return exportSuccessful;
        }
    }
}