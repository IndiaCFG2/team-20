from django.urls import path
from . import views
from .views import (
    Infodetailview,
    Querydetailview,
    Commentdetailview
    
)

urlpatterns = [
    path('',Infodetailview.as_view(),name = 'lets'),
    path('infos/',views.infos,name = 'infos'),
    path('query/',Querydetailview.as_view(),name = 'query'),
    path('comment/',Commentdetailview.as_view(),name = 'comment'),
    


]
