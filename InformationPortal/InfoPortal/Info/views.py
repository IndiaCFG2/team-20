from django.shortcuts import render
from .models import Info
from django.views.generic import CreateView, DetailView, UpdateView, DeleteView
# Create your views here.

class Infodetailview(CreateView):
    model = Info
    # template_name = 'index.html'
    fields = ['name','description','registerationlink']

    def form_valid(self, form):
      
        return super().form_valid(form)