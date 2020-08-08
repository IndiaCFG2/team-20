from django.urls import path
from . import views
from .views import my_django_view

urlpatterns = [
    path('',my_django_view,name="charts")
]
