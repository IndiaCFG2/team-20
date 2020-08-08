from django.urls import path
from . import views
from .views import (
    Infodetailview,
)

urlpatterns = [
    path('',Infodetailview.as_view(),name = 'lets'),
    path('teams/',views.infos,name = 'teams')

]
