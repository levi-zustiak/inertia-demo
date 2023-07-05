
import cx from 'classnames';

export default ({ loading, classNames, children, ...props }) => {
  const classes = cx(
    classNames,
    'flex items-center',
    'focus:outline-none',
    {
      'pointer-events-none bg-opacity-75 select-none': loading
    },
  );
  console.log(loading, classes);
  return (
    <button disabled={loading} className={classes} {...props}>
      {loading && <div className="mr-2 btn-spinner" />}
      {children}
    </button>
  );
};
