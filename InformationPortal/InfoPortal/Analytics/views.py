from django.shortcuts import render
#import requests

def my_django_view(request,*args,**kwargs):
    # if request.method == 'POST':
    #     r = requests.post('https://www.somedomain.com/some/url/save', params=request.POST)
    # else:
    #     r = requests.get('https://www.somedomain.com/some/url/save', params=request.GET)
    # if r.status_code == 200:
    #     return render(request,'Yay, it worked')
    return render(request,"template.html",{})
# Create your views here.
