import numpy as np

def main():
	def nonlin(x, deriv=False):
		if(deriv==True):
			return x*(1-x)
		return 1/(1+np.exp(-x))

	X = np.array([[0.33,0.1240,0.2,0.1,0.120,0.32],
				  [0.63, 0.3440, 0.8, 0.3, 0.720, 0.32],
				  [0.23, 0.350, 0.35, 0.8, 0.360, 0.32],
				  [0.73, 0.1240, 0.4, 0.4, 0.160, 0.35]])

	Y = np.array([[0.88],[0.64],[0.81],[0.23]])

	np.random.seed(1)

	syn0 = 2*np.random.random((6,4)) - 1
	syn1 = 2*np.random.random((4,1)) - 1

	for x in range(10000):

		l0 = X
		l1 = nonlin(np.dot(l0,syn0))
		l2 = nonlin(np.dot(l1,syn1))

		l2_error = Y - l2
		l2_delta = l2_error*nonlin(l2,deriv=True)
		l1_error = l2_delta.dot(syn1.T)
		l1_delta = l1_error*nonlin(l1,deriv=True)

		syn1 += l1.T.dot(l2_delta)

		syn0 += l0.T.dot(l1_delta)

	# print(l0)
	# print(l1)
	return l2sssss