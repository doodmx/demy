(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{2:function(e,a,t){e.exports=t("Evju")},Evju:function(e,a){$((function(){var e=$("#dataTableBuilder").DataTable();$("select").materialSelect(),$("#dataTableBuilder").on("preXhr.dt",(function(e,a,t){t.category=$("#categorySelect").val()})),$("#categorySelect").on("change",(function(){e.ajax.reload()}))}))}},[[2,0]]]);