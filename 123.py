# nhận dạng cà chua chín theo thời gian thực và in tọa độ quả cà chua chín ra màn hình
# sử dụng camera của máy tính
# sử dụng mạng YOLOv3 để nhận dạng
# sử dụng mạng CNN để phân loại
# sử dụng thuật toán KNN để phân loại
# sử dụng thuật toán SVM để phân loại
# sử dụng thuật toán Decision Tree để phân loại
# sử dụng thuật toán Random Forest để phân loại
# sử dụng thuật toán Naive Bayes để phân loại
# sử dụng thuật toán Logistic Regression để phân loại
# sử dụng thuật toán Linear Regression để phân loại
# sử dụng thuật toán KMeans để phân loại
# sử dụng thuật toán DBSCAN để phân loại
# sử dụng thuật toán Mean Shift để phân loại
# sử dụng thuật toán Hierarchical để phân loại

# import các thư viện cần thiết
import cv2
import numpy as np
import time
import os
import tensorflow as tf
from tensorflow import keras
from tensorflow.keras import layers
from tensorflow.keras.models import Sequential
from sklearn.neighbors import KNeighborsClassifier
from sklearn import svm
from sklearn.tree import DecisionTreeClassifier
from sklearn.ensemble import RandomForestClassifier
from sklearn.naive_bayes import GaussianNB
from sklearn.linear_model import LogisticRegression, LinearRegression
from sklearn.cluster import KMeans, DBSCAN, MeanShift, AgglomerativeClustering
from sklearn.metrics import accuracy_score
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.decomposition import PCA
from sklearn.manifold import TSNE
import matplotlib.pyplot as plt
import matplotlib.patches as patches
import matplotlib.image as mpimg
from PIL import Image

# khởi tạo các biến cần thiết
# đường dẫn đến các file
path = os.getcwd()
path = path.replace('\\', '/')


# đường dẫn đến các file
path = os.getcwd()
path = path.replace('\\', '/')
path = path + '/data'
