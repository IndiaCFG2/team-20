from django.shortcuts import render
from .models import Info,Query,Comment
from django.views.generic import CreateView, DetailView, UpdateView, DeleteView
from django.db.models import Q
# Create your views here.


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
    return render(request,'Info/infos.html',context)
class Infocreateview(CreateView):
    model = Info
    # template_name = 'index.html'
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



    