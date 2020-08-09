from django.shortcuts import render
from .models import Info,Query,Comment
from django.views.generic import CreateView, DetailView, UpdateView, DeleteView
from django.db.models import Q
# Create your views here.
import requests
import json

def my_django_view(request,*args,**kwargs):
    response = None
    try :
        response = requests.post('https://www.somedomain.com/some/url/save', params=request.POST) 
    except: 
        return render(request,"analytics.html",{})
    else:
        json = json.load(response)
        data = json.data
        return render(request,"analytics.html",{"onion" : data[0], "potato" : data[1], "Carrot" : data[2]})


def infos(request):
    infos = Info.objects.all()
    search_term = ''
    if 'search' in request.GET:
        search_term = request.GET['search']
        infos = infos.filter(
            Q(name__icontains=search_term)
        )
    context = {
        'infos':infos,'search_term':search_term
    }
    return render(request,'Info/schema.html',context)

def queries(request):
    queries = Query.objects.all()
    search_term = ''
    if 'search' in request.GET:
        search_term = request.GET['search']
        queries = queries.filter(
            Q(question__icontains=search_term)
        )
    context = {
        "queries":queries,"search_term":search_term
    }
    return render(request,'Info/queries.html',context)

def comments(request):
        comments = Comment.objects.all()
        search_term = ''
        if 'search' in request.GET:
            search_term = request.GET['search']
            queries = comments.filter(
                Q(query__question__icontains=search_term)
            )
        context = {
            "queries":queries,"search_term":search_term
        }
        return render(request,'Info/comments.html',context)


class Infocreateview(CreateView):
    model = Info
    template_name = 'Info/schemeAddition.html'
    fields = ['name','description','registerationlink','pdflink']

    def form_valid(self, form):
      
        return super().form_valid(form)

class Querycreateview(CreateView):
    model = Query
    # template_name = 'index.html'
    fields = ['question']

    def form_valid(self, form):
      
        return super().form_valid(form)


class Commentcreateview(CreateView):
    model = Comment
    # template_name = 'index.html'
    fields = ['content']

    def form_valid(self, form):
      
        return super().form_valid(form)

class Querydetailview(DeleteView):
    model = Query



    